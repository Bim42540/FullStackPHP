<?php

require_once './Person.php';

class Student extends Person {

    public function greetings(){

        return "Hello, I'm student {$this->getName()}";

    }

}