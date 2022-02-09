<?php

//supress operator  @: supress operator or notice operator : error operator

//never use @ operator because debugging is important

$x=20;
echo "the value of x : $x";

echo PHP_EOL;
//echo "the value of  y :".$y;  //undefined variable y
echo "the value of  y :".@$y;  

$z=10;
$z=isset($z)?$z:null;
echo PHP_EOL;
echo "the value of z using ternary :".$z; //undefined variable z
var_dump($z);

$z=isset($z)??null;
echo PHP_EOL;
echo "the value of z using NullCoalescing :".$z;  //undefined variable z
var_dump($z);

$p=(5<2)??null;
echo PHP_EOL;
var_dump($p);

if($p){
	echo 'p if running by NullCoalescing';
}else{
	echo 'p else Running by NullCoalescing';
}

$p=(5<2)?'':null;
echo PHP_EOL;
var_dump($p);

if($p){
	echo 'p if running by ternary';
}else{
	echo 'p else Running by ternary';
}