<?php

require_once 'AbsUser.php';

class Employee extends AbsUser
{

    public function increaseRevenue($sum)
    {
        print_r('Only a student can increase a scholarship.<br>');
        return;
    }
}