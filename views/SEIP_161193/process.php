<?php

function __autoload($classNameWithNamespace){
    $className  =  explode('\\',$classNameWithNamespace);
    $classPath  = "../../src/BITM/SEIP_161193/$className[1].php";

    echo $classPath . "<br>";
    require_once($classPath);
}

if (empty($_POST['studentID']) ){
    echo "I'm chat-b45 Person! <br>";

    $obj = new \App\Person();

    $obj->setName($_POST["userName"]);
    $obj->setDateOfBirth($_POST["dateOfBirth"]);

    echo $obj->getName() ."<br>";
    echo $obj->getDateOfBirth() ."<br>";
}

else {
    echo "I'm chat-b45 Student! <br>";

    $obj = new \Tap\Student();

    $obj->setName($_POST["userName"]);
    $obj->setStudentID($_POST["studentID"]);
    $obj->setDateOfBirth($_POST["dateOfBirth"]);

    echo $obj->getName() ."<br>";
    echo $obj->getStudentID() ."<br>";
    echo $obj->getDateOfBirth() ."<br>";
}
