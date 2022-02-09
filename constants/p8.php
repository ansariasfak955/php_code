<?php

//wap in php to show constant are global inside class


define('GRAVITY',10);
printf("The value of GRAVITY AT GLOBAL SCOPE : %d \n",GRAVITY);

$gravity = 9.8;
printf("The value of gravity AT GLOBAL SCOPE : %d \n",$gravity);

class Test{
	
	private $g;
	private $G;
	
	public function __construct(){
		 
		$this->G = GRAVITY;
		$this->g = $gravity;
		
		printf("The value of GRAVITY inside method : %d \n",GRAVITY);
		
		printf("The value of gravity inside method : %d \n",$gravity);
		
		printf("The value of gravity using g for class : %d \n",$this->g);
		
		printf("The value of gravity using g for class : %d \n",$this->G);
	}
}
$test = new Test();

?>
