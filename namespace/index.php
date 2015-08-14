<?php

function __autoload($class_name) {
	//echo 'includes/classes/'. $class_name . '.php';
    include $class_name . '.php';
}

//use includes\classes\classA;
use includes\classes\fun2;
//use includes\classes\classB;
use includes\classes\var4;

$objA = new includes\classes\classA();
//$objB = new classB();

$objA->var1 = 'Ranjeet';
$objA->var2 = 'Puri';

$objA->fun1();

$objB = new includes\classes\classB();
//$objB = new classB();

$objB->var1 = 'Pankaj';
$objB->var2 = 'Linghate';

$objB->fun1();
includes\classes\fun2();
echo includes\classes\var4;
?>