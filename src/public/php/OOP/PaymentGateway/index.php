<?php

require __DIR__ . '/../../../../vendor/autoload.php';

use cl\Transaction;

$paddleTrancsation = new Transaction();

$paddleTrancsation  -> setStatus(Transaction::STATUS_PAID);

var_dump($paddleTrancsation);
