<?php

//wap in php to string concatenation

$x='life';
$z='partner';

var_dump(gettype($x));
var_dump(gettype($z));
var_dump($x.$z);   //contenation
var_dump(gettype($x.$z));

$x=10;
$z=20;
var_dump($x.$z);
var_dump(gettype($x.$z));
$result='the sum is = ';
echo $result.($x+$z);