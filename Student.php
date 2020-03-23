<?php

require_once 'AbsUser.php';

class Student extends AbsUser
{
    private $grant;

    public function __construct()
    {
        $this->grant = '700';
    }

    public function increaseRevenue()
    {
        // TODO: Implement increaseRevenue() method.
    }
}