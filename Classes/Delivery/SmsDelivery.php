<?php


namespace Classes\Delivery;

use Interfaces\iDelivery;

class SmsDelivery implements iDelivery
{
    public function delivery($format)
    {
        return "Вывод формата ({$format}) в смс";
    }
}