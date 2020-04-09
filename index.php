<?php

include_once 'vendor/autoload.php';

use Models\Http\Controllers\Admin\DashboardController;
use Models\Http\Controllers\Admin\OrdersController;
use Models\Http\Controllers\MainController;
use Models\Http\Helpers\ImageHelper;
use Models\Product;
use Models\User;
use Models\Order;
use Models\Order2;

$dashboardController    = new DashboardController();
$ordersController       = new OrdersController();
$mainController         = new MainController();
$imageHelper            = new ImageHelper();
$product                = new Product();
$user                   = new User();
$order                  = new Order();
