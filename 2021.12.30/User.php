<?php


// Sukurkite klasę User su šiom viešais neprienamom savybėm: name, age ir viešai prieinamais metodas: setName, getName, setAge, getAge.


class User {
    protected $name;
    protected $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}