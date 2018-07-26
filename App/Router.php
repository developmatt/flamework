<?php

namespace App;

class Router {

	public function __construct(){
		$this->route();
	}

	public function route(){
		$routes[] = ['route' => '/', 'controller' => 'indexController', 'method' => 'index'];

		array_walk($routes, function($route){
			 if($_SERVER['REQUEST_URI'] == $route['route']){
			 	$class = "App\\Controller\\" . ucfirst($route['controller']);
			 	$controller = new $class;
			 	$method = $route['method'];
			 	$controller->$method();
			 }
		});
	}

}

?>