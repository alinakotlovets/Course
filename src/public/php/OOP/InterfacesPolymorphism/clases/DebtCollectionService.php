<?php

namespace clases;

class DebtCollectionService
{
    public function collectDebt(DateCollector $collector)
    {
        $owedAmount = mt_rand(100, 1000);
        $collectedAmount = $collector->collect($owedAmount);
        echo 'Colected $' . $collectedAmount . ' out of $' . $owedAmount . PHP_EOL;
    }

}