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

//Define a "order2" route
$f3->route('POST /order2', function () {
    //Add data from pet-order to Session array
    if(isset($_POST['pet'])) {
        $_SESSION['pet'] = $_POST['pet'];
    }
    if(isset($_POST['color'])) {
        $_SESSION['color'] = $_POST['color'];
    }

    //Display a view
    $view = new Template();
    echo $view->render('views/pet-order-2.html');
});

//Define a "summary" route
$f3->route('POST /summary', function () {

    //Display a view
    $view = new Template();
    echo $view->render('views/summary.html');
});


//Rune fat free
$f3->run();
