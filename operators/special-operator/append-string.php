<?php

//wap in php to show append operator in string

$name='Md';
$lname=' Asfak Ansari';

$name=$name.$lname;

echo $name;

echo PHP_EOL;

$name='Md';
$lname=' Asfak Ansari';
$name.=$lname;  //concate
echo $name;
echo PHP_EOL;
$name.=$lname;  //append
echo $name;