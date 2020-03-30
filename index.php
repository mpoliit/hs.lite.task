<?php

require_once 'inc/User.php';

$user = new User('vasa', 25);
print_r($user->getAll());
print_r($user->setEmail());