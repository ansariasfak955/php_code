<?php

//wap in php program to show no-return type in parameterised constructor

class Test{
	public function __construct($a){
		echo 'Constructor is called automatically';
		echo PHP_EOL;
		return $a+100;
	}
}

#object creation
$test = new Test(200);
// echo $test;  //Implicity called and connot be returned.
$x = $test->__construct(200); //Explicity called as method can be returned.
echo $x;
?>