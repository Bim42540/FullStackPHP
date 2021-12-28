<?php 

class Vehicle {
	function __construct($make, $model, $year) {
		$this->make  = $make;
		$this->model = $model;
		$this->year = $year;
	}

	public function setWheelsNumber($wheels) {
		$this->wheels = $wheels;
	}

	public function getIntroduction() {
		return "{$this->make} {$this->model}";
	}

	public function getAge() {
		return date("Y") -  $this->year;
	}

	public function getAgeText() {
		if ($this->getAge() <= 10) {
			return '10 years or newer';
		} else {
			return '11 years or older';
		}
	}

	public function getWheelsNumber() {
		return settype($this->wheels, "number") || 0;
	}

	public function getWheelsNumberText() {
		return get_class($this) . ' has ' . "{$this->getWheelsNumber()}" . 'wheels';
	}

	public function getFuelType() {
		throw new Error('Fuel type not found');
	}
}