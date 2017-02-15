<?php
namespace App;

class Person{

    private $name;
    private $dateOfBirth;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setDateOfBirth($dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }
}
