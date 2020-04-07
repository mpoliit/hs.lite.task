<?php

require_once 'inc/User.php';

$user = new User('112q', 'qqq444444353');
$getUserData = $user->getUserData();

print_r('id => ' . $getUserData['id'] . '<br>pass => ' . $getUserData['password']);