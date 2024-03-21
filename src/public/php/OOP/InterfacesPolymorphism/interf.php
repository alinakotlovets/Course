<?php
require __DIR__ . '/../../../../vendor/autoload.php';

$servis = new clases\DebtCollectionService();

echo $servis->collectDebt(new clases\Rocky()) . PHP_EOL;