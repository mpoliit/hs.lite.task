<?php


class Worker
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        if ($age>17 AND $age<60) {
            $this->name = $name;
            $this->age = (int)$age;
            $this->salary = (float)$salary;
        } else {
            print_r('Возраст сотрудника может быть с 18 до 60<br>');
        }
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function getSalary(){
        return $this->salary;
    }
}