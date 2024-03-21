<?php

namespace clases;

require_once 'DateCollector.php';

class Rocky implements DateCollector
{
    public function collect(float $owedAmount): float
    {
        return $owedAmount * 0.65;
    }
}