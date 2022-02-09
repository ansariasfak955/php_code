<?php

//wap in php to show setter and getter

class Test{
	public $a = 10; #variable public : are global variable
	public $b = 20; #variable public : are global variable
	
	var $c = 30; #variable public : are global variable =  
	
	public function setValue($a,$b,$c){
		
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}
	
	public function getValue(){
		echo "The value of a from getter = {$this->a} \n";
		echo "The value of a from getter = {$this->b} \n";
		echo "The value of a from getter = {$this->c} \n";
	}
}

$test = new Test();

echo "The of number a before setter = {$test->a} \n";
echo "The of number a before setter = {$test->b} \n";
echo "The of number a before setter = {$test->c} \n";

$test->setValue(100,200,300);  //setter

echo "The value of member a after setter = {$test->a} \n";
echo "The value of member a after setter = {$test->b} \n";
echo "The value of member a after setter = {$test->c} \n";

$test->getValue(100,200,300); //getter
?>