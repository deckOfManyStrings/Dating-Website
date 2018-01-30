<?php
//turn on error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//set debug level
$f3 ->set('DEBUG', 3);

//Define a default route
$f3->route('GET /pages/home.html', function(){
    $template = new Template();
    echo $template->render('pages/home.html');
});