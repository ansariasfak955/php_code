<?php

//Has-relationship

class A{
	public function Ktm_Bike(){
		echo 'This is a Ktm-Bike...'.PHP_EOL;
	}
}

class B extends A{
	public function Cycle(){
		echo 'This is a Cycle...'.PHP_EOL;
	}
}

$b= new B();
$b->Cycle();
$b->Ktm_Bike();

$a = new A();
$a->Ktm_Bike();

?>