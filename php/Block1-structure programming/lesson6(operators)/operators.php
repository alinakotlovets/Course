<?php

$x = 3;
$x = $x * 3; /*or*/ $x *= 3;

$x = 'Hello';
$x .= 'World';
echo $x . '</br>';

$x = 2;
$y = 1;
var_dump($x == $y); //не строге порівння
var_dump($x === $y); //строге порівння

var_dump($x != $y); //заперечення

var_dump($x <=> $y); // x < y = -1
                           // x = y = 0
                           // x > y = 1

$x = true;
$y = false;

var_dump($x && $y); // && true = koli dva elementa rivni true
var_dump($x || $y); // && true = koli hoch 1 element rivniy true

$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f'];

var_dump($x + $y); //не додасть елементи другого масиву так як вони не мають значення

$x = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['d' => 4, 'e' => 5, 'f' => 6];

var_dump($x + $y); // додасть два масиви так як в них різні значення
