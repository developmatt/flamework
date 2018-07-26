<?php

namespace App;

class Router {

	public function __construct(){
		$this->route();
	}

	public function route(){
		$routes[] = ['route' => '/', 'controller' => 'indexController', 'method' => 'index'];
		$routes[] = ['route' => '/complete', 'controller' => 'indexController', 'method' => 'complete'];


		array_walk($routes, function($route){
			 if($_SERVER['REQUEST_URI'] == $route['route']){
			 	$class = "App\\Controller\\" . ucfirst($route['controller']);
			 	$file = __DIR__ . '/Controller/' . ucfirst($route['controller']) . '.php';
			 	if(!file_exists($file)){
			 		echo "The specified controller was not found";
			 	}else{
			 		$controller = new $class;
				 	$method = $route['method'];
				 	$controller->$method();
			 	}			 	
			 }
		});
	}

}

?>