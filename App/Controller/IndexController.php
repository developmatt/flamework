<?php

namespace App\Controller;

use App\View;
use App\Model\Product;

use Flame\Controller;

class IndexController extends Controller {
	public function __construct(){
		$this->view = new View;
	}

	public function index(){
		$this->view->compose('content', true)->with(['sample' => 'Sample Value'])->show();
	}

	public function complete(){
		$this->view->show('complete');
	}

	public function modelProduct(){
		$product = new Product();
		http_response_code(200);
		echo json_encode($product->all());
	}
}
?>