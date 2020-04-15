<?php


namespace Classes\Delivery;

use Interfaces\iDelivery;

class ConsoleDelivery implements iDelivery
{
    public function delivery($format)
    {
        return "Вывод формата ({$format}) в консоль";
    }
}