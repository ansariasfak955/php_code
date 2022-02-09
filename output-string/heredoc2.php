<?php

//wap in php show here doc string syntax as processed string

$a=99;
echo <<<BLOCK
this a Here Doc String, $a \n
	"this is again new line of string "$a""
'this string is inside $a single qoutes \t tabbed' = $a

BLOCK;

$a=100;
echo <<<"BLOCK"
this a Here Doc String, $a \n
	"this is again new line of string "$a""
'this string is inside $a single qoutes \t tabbed' = $a

BLOCK;
