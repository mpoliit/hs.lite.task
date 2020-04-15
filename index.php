<?php
include_once 'vendor/autoload.php';

use Classes\Logger;
use Classes\Format\DateAndDetailsFormat;
use Classes\Delivery\SmsDelivery;

$format = new DateAndDetailsFormat();
$delivery = new SmsDelivery();


$logger = new Logger();
echo $logger->log($format, $delivery, 'Emergency error! Please fix me!');
