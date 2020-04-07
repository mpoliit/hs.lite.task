<?php
error_reporting(0);

spl_autoload_register(function ($namespase){
    $path = __DIR__ . '/' . str_replace('\\', '/', $namespase) . '.php';
    if (is_file($path)){
        require_once $path;
    } else {
        print_r('File ' . $path . ' not exist.');
    }
});

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\MainController;
use App\Http\Helpers\ImageHelper;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\Order2;

$dashboardController    = new DashboardController();
$ordersController       = new OrdersController();
$mainController         = new MainController();
$imageHelper            = new ImageHelper();
$product                = new Product();
$user                   = new User();
$order                  = new Order();
$order2                 = new Order2();
