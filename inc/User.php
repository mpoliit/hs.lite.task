<?php


class User
{
    private $name;

    private $age;

    private $email;

    public function __construct($name, $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    private function setName(string $name)
    {
        $this->name = $name;
    }

    private function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getAll()
    {
        return ['name' => $this->name, 'age' => $this->age];
    }

    public function __call($name, $arguments)
    {
        return 'Method <strong>' . $name . '</strong> does not exist ';
    }
}