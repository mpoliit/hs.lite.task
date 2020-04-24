<?php

namespace Classes;

use Interfaces\IPay;

class LiqPay implements IPay
{
    private $login, $pass;

    public function __construct(string $login, string $pass)
    {
        $this->login = $login;
        $this->pass = $pass;
    }

    public function connect(): void
    {
        print_r("<pre>Подключение к LiqPay с доступами: $this->login => $this->pass</pre>");
    }

    public function sendMoney($connect): void
    {
        print_r("<pre>Оплата LiqPay</pre>");
    }
}