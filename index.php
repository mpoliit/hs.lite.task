<?php

require_once 'inc/User.php';

$user = new User('Вася', 25);
print_r($user->getAll());
print_r($user->setEmail());