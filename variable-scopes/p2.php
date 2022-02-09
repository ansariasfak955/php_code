<?php

//wap in php to show local and global scope of variable

$a=10;
echo "the value of at global scope is : $a";
echo PHP_EOL;

function display(){
	$b=200;
	global $a; //get the variable from help
	echo "the value of global a at local scope is : $a"; //undefined variable
	echo PHP_EOL;
	echo "the value of local b at local scope is : $b";
}
display();

echo PHP_EOL;
echo "the value of at global scope is : $a";