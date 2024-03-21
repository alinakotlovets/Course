<?php

namespace task1;


class Person
{
    public $first_name;
    public $last_name;

    public function __construct($first_name,$last_name)
    {
       $this->first_name =  $first_name;
       $this->last_name = $last_name;

    }

    /**
     * @return mixed
     */
    public function geFullName()
    {
        return $this->last_name .' '. $this->first_name;
    }
}