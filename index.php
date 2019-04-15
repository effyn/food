<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

$f3 = Base::instance();

$f3->set('DEBUG', 3);
$f3->route('GET /@item', function($f3, $params) {
    $item = $params['item'];
    switch ($item)
    {
        case 'bagel':
            $f3->reroute('breakfast/continental');
        default:
            echo "<h3>We don't have $item</h3>";
    }
});

$f3->route('GET /order', function() {
    $view = new Template();
    echo $view->render('views/form1.html');
});

$f3->route('POST /order-process', function() {
    $food = $_POST['food'];
});

$f3->route('GET /@first/@last', function($f3, $params) {
    $first = $params['first'];
    $last = $params['last'];
    echo "<h4>Hello, $first $last!</h4>";
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