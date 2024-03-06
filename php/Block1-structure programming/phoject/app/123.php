<?php

declare(strict_types =  1);
function format(float $sum): string
{
    $isNegative = $sum < 0;

    return ($isNegative ? '-' : ''). '$' . number_format(abs($sum), 2);
}