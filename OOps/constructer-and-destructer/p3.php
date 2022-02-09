<?php

//wap in php to show parameterised constructor

class Test{
	public function __construct($name,$roll){
		echo $name;
		echo PHP_EOL;
		echo $roll;
	}
}
$test = new Test('asfak',1001);

?>