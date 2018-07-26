<?php

	namespace App;
	
	/**
	 * 
	 */
	class View
	{

		private $args;

		private $view;

		private $template;


		public function compose($view, $template = false){
			$this->view = $view;
			$this->template = $template;
			return $this;
		}

		public function with($args){
			$this->args = $args;
			$this->buildVariables($args);
			$this->show();
		}

		public function show($view = false){
			if($view){
				$this->view = $view;
			}

			if($this->template){
				$this->showTemplate();
			}
			else{
				include('Views/' . $this->view . '.php');
			}
		}

		public function showTemplate(){
			include('Views/templates/default.php');
		} 

		public function buildVariables($args){
			foreach ($args as $arg => $value) {
				$this->$arg = $value;
			}
		}
	}
?>