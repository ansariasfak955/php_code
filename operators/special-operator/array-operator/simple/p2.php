<?php

//wap in php to + operator in array with duplicate subscript

$x=[10,20,30,'asfak'];
$y[0]='tony';
$y[1]=100;
$y[2]=100;

print_r($x);
print_r(count($x));
print_r($y);
print_r(count($y));
print_r($x+$y);   //$x.add($y)
print_r($y+$x);

