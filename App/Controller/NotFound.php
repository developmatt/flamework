<?php

namespace App\Controller;

use App\View;
use Flame\Controller;

class NOtFound extends Controller {
	public function __construct(){
		$this->view = new View;
	}

	public function index(){
		$this->view->compose('404', true)->show();
	}
}
?>
