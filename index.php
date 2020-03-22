<?php

require_once 'Worker.php';

$ivan = new Worker();
$ivan->setValue('Ваня', '25', '1000');

$vasya = new Worker();
$vasya->setValue('Вася', '26', '2000');

print_r('<p>Зароботная плата Ивана <strong>'. $ivan->salary .'</strong></p>');
print_r('<p>Зароботная плата Василия <strong>'. $vasya->salary .'</strong></p>');
$age = $ivan->age + $vasya->age;
print_r('<p>Общий возраст сотрудников <strong>'. $age .'</strong></p>');