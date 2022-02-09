<?php

//wap in php to show super global value

$a=10;
$b=20;

print_r($GLOBALS);

function display(){
	$a = 100; //local
	$b = 200; //local
	echo PHP_EOL;
	echo "the value of a from local : $a ";
	echo PHP_EOL;
	echo "the value of a from local : $b ";
	
	echo PHP_EOL;
	echo "the valu of a from global using SG : {$GLOBALS['a']}";
	echo PHP_EOL;
	echo "the valu of a from global using SG : {$GLOBALS['b']}";
	
	$a = $GLOBALS['a']; //without using global keyword
	$b = $GLOBALS['b']; //without using global keyword
	
	echo PHP_EOL;
	echo "the value of a from global withou global keyword : $a";
	echo PHP_EOL;
	echo "the value of a from global withou global keyword : $b";
	
	echo PHP_EOL;
	global $a,$b;  //using global keyword
	echo PHP_EOL;
	echo "the value of a from global with using global keyword : $a ";
	echo PHP_EOL;
	echo "the value of a from global with using global keyword : $b ";
}
display();