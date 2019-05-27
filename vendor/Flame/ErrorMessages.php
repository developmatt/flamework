<?php

/**
 * @package flamework
 * @author Matheus Godoi <hi.developmatt@gmail.com> (developmatt.com)
*/

namespace Flame;

class ErrorMessages
{
	public $status;
	public $message;
	public $arr = [
		'404' => 'Not found',
		'500' => 'Internal server error'
	];

	public function __construct($code){
		$this->status = $code;
		$this->message = $this->arr[$code];
	}
}

?>