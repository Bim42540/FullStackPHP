<?php


// Sukurkite klasę Driver, kuri paveldėtų Worker klasę ir įneštų papildomas savybes: vairavimo patirtis, vairavimo kategorija (A, B, C).

require_once './Worker.php';

class Driver extends Worker{

    public $yearsOfExp;
    public $licenseCategories;

    function __construct($name, $age)
    {
        parent::__construct($name, $age);
    }

    public function setYearsOfExp($yearsOfExp) {
        $this->yearsOfExp = $yearsOfExp;
    }

    public function getYearsOfExp() {
        return $this->yearsOfExp;
    }

    public function setLicenseCategories($categories){
        $this->licenseCategories = $categories;
    }

    public function getLicenseCategories(){
        return $this->licenseCategories;
    }



}