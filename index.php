<?php

require_once 'vendor/autoload.php';

use Classes\SendLiqPay;
use Classes\SendEasyPay;
use Classes\AbsTransactions;

function clientCode(AbsTransactions $creator)
{
    $creator->send($creator);
}

echo "Test LiqPay";
clientCode(new SendLiqPay("admin", "****"));

echo "Test EasyPay";
clientCode(new SendEasyPay("manager", "****"));
