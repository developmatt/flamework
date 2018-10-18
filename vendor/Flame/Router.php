<?php

/**
 * @package flamework
 * @author Matheus Godoi <hi.developmatt@gmail.com> (developmatt.com)
*/

namespace Flame;

class Router
{
	
	protected $routes;

	public function __construct(){
		$this->setRoutes();
		$this->run();
	}

	public function run(){
		array_walk($this->routes, function($route){
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