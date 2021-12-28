<?php 

require_once './Vehicle.php';

class Motorcycle extends Vehicle {
	function __construct($make, $model, $year, $wheels) {
		parent::__construct($make, $model, $year);

		$this->wheels = $wheels;
	}

	public function getFuelType() {
		return [1,2];
	}
}