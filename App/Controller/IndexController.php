<?php

namespace App\Controller;

use App\View;
use Tiny\Controller;

class IndexController extends Controller {
	public function __construct(){
		$this->view = new View;
	}

	public function index(){
		$this->view->compose('content', true)->with(['sample' => 'Sample Value']);
	}

	public function complete(){
		$this->view->show('complete');
	}
}
?>