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
		$route = array_filter($this->routes, function($r){
			return $_SERVER['REQUEST_URI'] == $r['route'];
		});

		if($route){
			$class = "App\\Controller\\" . ucfirst($route['controller']);
			$controller = new $class;
			$method = $route['method'];
			$controller->$method();
		}else{
			$notFound = new \App\Controller\NotFound;
			$notFound->index();
		}
	}
}
?>
