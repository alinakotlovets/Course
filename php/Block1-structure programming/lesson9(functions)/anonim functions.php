<?php

// анонімна функція
$x = 5;
$sum = function (...$number) use ($x)     // анонімна функція присваюється змінній
{                                         // щоб використовувати глобальні змінні use()
    return $x + array_sum($number);
};

echo $sum(1, 2, 3, 4);

// приклад 1
$array = [1, 2, 3];
$arr = array_map(function ($element){
    return $element * 2;
}, $array);

echo '<br/>';
print_r($array);
echo '<br/>';
print_r($arr);

// приклад 2
$array = [1, 2, 3];
$x = function ($element){
    return $element * 2;
};
$arr = array_map($x, $array);

echo '<br/>';
print_r($array);
echo '<br/>';
print_r($arr);

// приклад 3

$array = [1, 2, 3];
function foo($element){
    return $element * 2;
};
$arr = array_map('foo', $array);

echo '<br/>';
print_r($array);
echo '<br/>';
print_r($arr);

?>