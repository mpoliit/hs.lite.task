<?php


class Worker
{
    public $name    = '';
    public $age     = '';
    public $salary  = '';

    public function setValue($name, $age, $salary){
        $this->name     = $name;
        $this->age      = (int) $age;
        $this->salary   = (float) $salary;

    }
}