<?php

// Sukurkite klasę Student, kuri paveldės User klasę ir įneštų papildomas viešais neprienamas savybes stipendija, kursas bei jiems reikalingu metodus

require_once './User.php';

class Student extends User {

    
    protected $scholarship;
    protected $course;
    
    function __construct($name, $age)
    {
        parent::__construct($name, $age);
    }

    public function getScholarship() {
        return $this->scholarship;
    }

    public function setScholarship($scholarship){
        $this->scholarship = $scholarship;
    }

    public function getCourse() {
        return $this->course;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

}