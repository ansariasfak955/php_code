<?php

//Is-relationship

class A{
	public function Ktm_bike(){
		echo 'this is a ktm-bike...'.PHP_EOL;
	}
}

class B{
	public function Cycle(){
		echo 'this is a cycle...'.PHP_EOL;
	}
	public function Ktm_bike(){
		//echo 'this is a ktm-bike...'.PHP_EOL;
		$a = new A();
		$a->Ktm_bike();
	}
}

$b = new B();
$b->Cycle();
$b->Ktm_bike();

$a = new A();
$a->Ktm_bike();

?>