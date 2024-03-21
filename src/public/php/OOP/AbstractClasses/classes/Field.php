<?php

namespace AbstractClasses;
require_once 'Renderable.php';
abstract class Field implements \AbstractClasses\Renderable
{   public function __construct(protected string $name)
{

}


}