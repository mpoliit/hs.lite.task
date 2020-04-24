<?php


namespace Classes;


use Interfaces\IPay;

abstract class AbsTransactions
{
    abstract public function getPaymentSystem(): IPay;

    public function send($connect): void
    {
        $network = $this->getPaymentSystem();

        $network->connect();
        $network->sendMoney($connect);
    }
}