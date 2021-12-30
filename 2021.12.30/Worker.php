<?php

// Sukurkite klasę Worker, kuri paveldės User klasę ir įneštų papildomą viešai neprienamą savybę salary ir viešai prieinamus metodus getSalary ir setSalary.

require_once './User.php';

class Worker extends User {

    protected $salary;

    function __construct($name, $age)
    {
        parent::__construct($name, $age);

    }


    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }


}