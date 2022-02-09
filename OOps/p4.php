<?php

//wap in php to show Instant variables and Instant

class Test{
	var $a=10; //instant variable
	var $b=20; //instant variable
	var $c=30; //instant variable
}

$x=10;

$test = new Test();
var_dump($test); //instance

var_dump($test instanceof Test);  //instanceOf operator : used to check if the given object is instance of Test or not.
var_dump($x instanceof Test);

?>