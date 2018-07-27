<?php

/**
 * @package tiny-framework
 * @author Matheus Godoi <hi.developmatt@gmail.com> (developmatt.com)
*/

namespace App;

use Tiny\Router as TinyRouter;

class Router extends TinyRouter {

	public function setRoutes(){
		$this->routes[] = ['route' => '/', 'controller' => 'indexController', 'method' => 'index'];
		$this->routes[] = ['route' => '/complete', 'controller' => 'indexController', 'method' => 'complete'];

	}
}

?>