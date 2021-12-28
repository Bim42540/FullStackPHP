<?php

require_once './Vehicle.php';

class Bus extends Vehicle {
	function __construct($make, $model, $year, $wheels) {
		parent::__construct($make, $model, $year);

		$this->wheels = $wheels;
	}

	public function getFuelType() {
		return [2, 3];
	}
}