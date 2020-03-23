<?php

require_once 'AbsUser.php';

class Student extends AbsUser
{
    public $grant;

    public function __construct($sum = 700)
    {
        $this->grant = $sum;
        return;
    }

    public function increaseRevenue($sum)
    {
        $this->grant = $this->grant + $sum;
        return;
    }
}