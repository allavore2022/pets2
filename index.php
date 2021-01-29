<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base Class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//Define a default root (home page)
$f3->route('GET /', function () {
 //   echo "My Pets";
    $view = new Template();
    echo $view->render('views/pet-home.html');
});

//Define a order root
$f3->route('GET /order', function () {
//    echo "Order Page";
    $view = new Template();
    echo $view->render('views/pet-order.html');
});

//Rune fat free
$f3->run();
