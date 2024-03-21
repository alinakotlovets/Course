<?php

require_once 'Users.php';
use \User\Users;

$user = new Users('fbhfbv','dbsc', 'dbscj');
echo $user->get();