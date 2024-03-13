<?php

require_once 'Transaction.php';
$class = 'Transaction';
$transaction = (new  $class(100, "t"))
    -> gr(8)
    ->addTax(10);

$obj = new \stdClass();
$obj->a =1;
$obj->b =2;
$obj->c =3;
var_dump($obj);

