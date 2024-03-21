<?php

namespace Rectangle;

class Rectangle
{
    public $x;
    public $y;
    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function s()
    {
        return $this-> x * $this->y ;
    }

    public function p()
    {
        return ($this-> x +$this->y) *2;
    }


}