<?php

// Sukurkite vieną studentą ir viena vairuotoją ir užduokite jiems visas reikiamas savybes. Vardą ir amžių nustatykite sukurimo metu

require_once './Student.php';
require_once './Driver.php';

$driver = new Driver('Gytis', 26);

$driver->setSalary(2500);
$driver->setYearsOfExp(34);
$driver->setLicenseCategories('A, B, CE');

var_dump($driver);


$student = new Student('Robertas', 22);

$student->setScholarship(250);
$student->setCourse('maths');

var_dump($student);
