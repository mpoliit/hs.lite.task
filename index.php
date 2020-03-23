<?php
require_once 'Employee.php';
require_once 'Student.php';

$stud = new Student(100);
$stud->increaseRevenue(450);
print_r('Grand student = ' . $stud->grant . '<br>');

$employee = new Employee();
$employee->increaseRevenue(200);
print_r('Grand employee = ' . $employee->grant . '<br>');
