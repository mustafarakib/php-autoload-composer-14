<?php
require_once("../../vendor/autoload.php");
use App\Calculator;

$obj = new Calculator();

$obj->setNumber1($_POST['number1']);
$obj->setNumber2($_POST['number2']);
$obj->setOperation($_POST['operation']);

echo $obj->getResult();
