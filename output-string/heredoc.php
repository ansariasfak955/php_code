<?php

//wap in php to show here doc string syntax

$a=99;
echo <<<BLOCK
this a Here Doc String, $a \n
	"this is again new line of string "$a""
'this string is inside $a single qoutes \t tabbed' = $a

BLOCK;

echo <<<BLOCK
this a Here Doc String, $a \n
	"this is again new line of string "$a""
'this string is inside $a single qoutes \t tabbed' = $a

BLOCK;

$html = <<<BLOCK
this a Here Doc String, $a \n
	"this is again new line of string "$a""
'this string is inside $a single qoutes \t tabbed' = $a
BLOCK;
echo $html;