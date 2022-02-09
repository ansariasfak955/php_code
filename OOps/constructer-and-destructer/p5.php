<?php

//wap in php to show program to show __constructor

class Test{
	public function __construct(){
		echo 'Constructor is called automatically';
		echo PHP_EOL;
		return 10;
	}
}

$test = new Test();
$test = new Test;
$test = new Test;
// echo $test;  //Implicity called and connot be returned.
$x = $test->__construct(); //Explicity called as method can be returned.
echo $x;
?>