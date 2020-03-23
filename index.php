<?php
require_once 'Worker.php';

$jack = new Worker('Jack', 25, 1000);

if (!is_null($jack->getAge()) && !is_null($jack->getSalary())){
    echo $jack->getAge() . ' * ' . $jack->getSalary() . ' = ' . $jack->getAge() * $jack->getSalary();

};