<?php

session_start();
include 'functions.php';
$q=basename($_SERVER['REQUEST_URI']);
$home_url='http://'.$_SERVER['HTTP_HOST'];

include 'routes.php';

$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$request_method=$_SERVER['REQUEST_METHOD'];

if (array_key_exists($url, $routes[$request_method])) {
  include $routes[$request_method][$url].'.php';
} else {
  include 'views/404.php';
}


?>
