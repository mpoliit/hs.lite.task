<?php


namespace Classes;


use Interfaces\IPay;

class SendLiqPay extends AbsTransactions
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getPaymentSystem(): IPay
    {
        return new LiqPay($this->login, $this->password);
    }
}