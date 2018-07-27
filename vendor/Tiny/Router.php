<?php

/**
 * @package tiny-framework
 * @author Matheus Godoi <hi.developmatt@gmail.com> (developmatt.com)
*/

namespace Tiny;

class Router
{
	
	protected $routes;

	public function __construct(){
		$this->route();
		$this->run();
	}

	public function run(){
		array_walk($this->routes, function($route){
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