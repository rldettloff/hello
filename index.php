<?php

// This is my CONTROLLER!

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require auto load file
require_once('vendor/autoload.php');

//Instatiate fat-free framework basecall
$f3 Base::instance();
//Base f3 = newbase (java)

//Define a default root
$f3->ruote('GET /', function() {
    echo "<h1>Hello!</h1>";
    });
$f3->run();