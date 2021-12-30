<?php

// Sukurkite abstrakčią klasę Person, kuri priimtų konstruktoriuje vardą ir turetų abstrakų metodą greetings

abstract class Person{

    protected $name;

    function __construct($name)
    {
        $this->setName($name);
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    abstract public function greetings();

}