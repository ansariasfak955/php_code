<?php

//wap in php to show object making

class Test{	
	var $a=10;
	var $b=20;
	var $c=30;
}

$test = new Test(); //Instantiation
var_dump($test);
$test = Test();  //Assignment
var_dump($test);
$test = 10;      //Assignment
var_dump($test);

function Test(){
	return 'Hy from test function';
}


?>