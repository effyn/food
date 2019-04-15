<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

$f3 = Base::instance();

$f3->set('DEBUG', 3);
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->route('GET /breakfast', function() {
    $view = new Template();
    echo $view->render('views/breakfast.html');
});

$f3->route('GET /lunch', function() {
    $view = new Template();
    echo $view->render('views/lunch.html');
});

$f3->route('GET /breakfast/continental', function() {
    $view = new Template();
    echo $view->render('views/bfast-cont.html');
});

$f3->route('GET /lunch/brunch/buffet', function() {
    $view = new Template();
    echo $view->render('views/buffet.html');
});

$f3->run();