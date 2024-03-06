<?php

declare(strict_types=1);

function text()
{
    return "Hello word";
}

$x = text();
echo text() . '<br/>'; //$x;

function x(): int|float /* mixed - використання декількох типів */
                        // '|' перечислення
{
    return 1;
}

var_dump(x());

function sum(int $x, int $y)
{
    return $x+$y;
}

echo '<br/>' . sum(1,1);



function ss(...$number)
{
    return '<br/>' . array_sum($number);
}
$x = 'ss';
if (is_callable($x)) {
    echo $x (1, 2);
} else {
    echo '<br/>' . "no function";
}



// анонімна функція
$x = 5;
$sum = function (...$number) use ($x)     // анонімна функція присваюється змінній
{                                         // щоб використовувати глобальні змінні use()
    return '<br/>' . $x + array_sum($number);
};

echo $sum(1, 2, 3, 4);


?>
















