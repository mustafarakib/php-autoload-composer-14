<?php

namespace Tap;
use App\Person;

class Student extends Person{

    private $studentID;

        public function setStudentID($studentID){
            $this->studentID = $studentID;
        }

        public function getStudentID(){
            return $this->studentID;
        }
}
