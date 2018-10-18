<?php

/**
 * @package flamework
 * @author Matheus Godoi <hi.developmatt@gmail.com> (developmatt.com)
*/

namespace App;

use Flame\Router as FlameRouter;

class Router extends FlameRouter {

	public function setRoutes(){
		$this->routes[] = ['route' => '/', 'controller' => 'indexController', 'method' => 'index'];
		$this->routes[] = ['route' => '/complete', 'controller' => 'indexController', 'method' => 'complete'];
	}
}

?>