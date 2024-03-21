<?php

namespace User;
class Users
{
    public string $name;
    public string $email;
    public string $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function get()
    {
        return $this->email . ' ' . $this->name . ' ' . $this->password;
    }

}