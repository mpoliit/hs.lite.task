<?php


namespace Classes\Delivery;

use Interfaces\iDelivery;

class EmailDelivery implements iDelivery
{
    public function delivery($format)
    {
        return "Вывод формата ({$format}) по имейл";
    }
}