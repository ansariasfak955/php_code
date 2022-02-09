<?php

//wap in php to show new doc string syntax

$a=99;
echo <<<'BLOCK'
this a Here Doc String, $a \n
	"this is again new line of string "$a""
'this string is inside $a single qoutes \t tabbed' = $a

BLOCK;

$a=100;
$code=<<<'BLOCK'
this a Here Doc String, $a \n
	"this is again new line of string "$a""
'this string is inside $a single qoutes \t tabbed' = $a

BLOCK;
echo $code;