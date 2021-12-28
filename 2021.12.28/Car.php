<?php

require_once './Vehicle.php';

class Car extends Vehicle {
	function __construct($make, $model, $year) {
		parent::__construct($make, $model, $year);

		$this->wheels = 4;
	}

	public function getFuelType() {
		return [1,2];
	}
}