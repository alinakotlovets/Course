<?php

declare(strict_types = 1);

// Your Code

function transactionsfiles(string $dirpatch): array
{
    $files = [];

    foreach (scandir($dirpatch) as $file){
        if(is_dir($file)){
            continue;
        }
        $files[] = $dirpatch . $file;
    }
    return $files;
}

function gettransactions(string $filename): array
{
    if (! file_exists($filename)){
        trigger_error('File "' . $filename . '" does not exist ', E_USER_ERROR);
    }

    $file = fopen($filename, 'r');

    fgetcsv($file);

    $transactions = [];

    while (($transaction = fgetcsv($file)) !== false){
      $transactions[] = extractTransaction($transaction);
    }

    return $transactions;
 }

 function extractTransaction(array $transactionRow): array
 {
     [$date, $chek, $opis, $sum] = $transactionRow;

     $sum = (float)str_replace(['$', ','], '', $sum);

    return ['date' => $date,
        'chek' => $chek,
        'opis' => $opis,
        'sum' => $sum
    ];
 }

 function calculate(array $transactions): array
 {
     $totals = ['netTotal' => 0, 'totalIncome' => 0, 'totalExpense' => 0];

     foreach ($transactions as $transaction) {
         $totals['netTotal'] += $transaction['sum'];

         if ($transaction['sum'] >=0 ){
             $totals['totalIncome'] += $transaction['sum'];
         } else {
             $totals['totalExpense'] += $transaction['sum'];
         }
     }

 return $totals;
 }

 function formatdate(string $date): string
 {
    return date('j.M.Y', strtotime($date));
 }


























