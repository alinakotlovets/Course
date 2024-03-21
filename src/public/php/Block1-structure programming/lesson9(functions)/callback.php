<?php

$x = 5;
$sum = function (callable $callback, ...$number) use ($x)     // анонімна функція присваюється змінній
{                                         // щоб використовувати глобальні змінні use()
return $callback($x + array_sum($number));
};

echo $sum('foo', 1, 2, 3, 4);


function foo($element){
    return $element * 2;
}

$sum = function (closure $callback, ...$number)
{
    return '<br/>' . $callback(array_sum($number));
};

echo $sum(function ($element){
    return $element * 2;
}, 1, 2, 3, 4);

?>