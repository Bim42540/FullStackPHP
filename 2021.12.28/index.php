<?php

require_once './Boat.php';
require_once './Bus.php';
require_once './Car.php';
require_once './Motorcycle.php';
require_once './Plane.php';
require_once './Vehicle.php';

$plane = new Plane('Boing', '747', 2020, 0);

var_dump($plane);

$car = new Vehicle('audi', 'TT', 1998);

var_dump($car);