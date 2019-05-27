<?php

require_once "../vendor/autoload.php";

//$route = new \App\Router;
$route = new \Flame\Router;
$route->get('/index', 'indexController@index');
$route->get('/complete', 'indexController@complete');
