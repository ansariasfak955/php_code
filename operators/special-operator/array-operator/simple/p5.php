<?php

//wap in php to + operator in array with duplicate subscript
$x=[10,20,30,40];

$y=[100,200,300,400,500];

echo "the count of x ".count($x);
echo PHP_EOL;
echo "the count of x ".count($y);
echo PHP_EOL;
var_dump(count($x)==count($y));
print_r($x);  
print_r($y);  

print_r($x+$y);  //$x.add($y)
print_r($y+$x);  //$x.add(xy)
 
 //overwrite the duplicate and insert the unique
 //total array = extra element + replaced element
