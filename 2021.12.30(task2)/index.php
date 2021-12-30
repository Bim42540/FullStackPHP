<?php

require_once './Programmer.php';
require_once './Student.php';
require_once './Teacher.php';

$programmer = new Programmer('Gytis');
$student = new Student('Rokas');
$teacher = new Teacher('Algis');

var_dump($programmer->greetings());
var_dump($student->greetings());
var_dump($teacher->greetings());


