<?php

require_once '../Car.php';

class Bmw extends Car {
	function __construct($model, $year) {
		parent::__construct('Bmw', $model, $year);
	}
}