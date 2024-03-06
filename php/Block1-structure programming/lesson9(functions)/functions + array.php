<?php

function summ(...$numbers)  //створює масив чисел
{
    return array_sum($numbers);
}

echo summ(1,1, 100, 8);

function summa($x, $y, ...$numbers)
{
    return $x + $y + array_sum($numbers);
}

$number = [100, 8, 10];
echo '<br/>' . summa(1,1, ...$number); //розпаковує масив чисел

function summaa($x, $y)
{
    return $x + $y;
}

$number = ['x' => 100, 'y' => 10];
echo '<br/>' . summaa(...$number); // ключі передаються як змінні

$array = [1, 2, 3];
$x = 5;
$array2 = array_map(fn($number) => $number * $number * ++$x, $array);
// дає використовувати глобальні змінні без привязки і не змінює їх

echo '<br/>';
print_r($array2);

?>