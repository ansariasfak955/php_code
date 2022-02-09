<?php

//wap in php to show modify operators

$x=10;
$x=$x-1;
echo "the value of x without assignment operator : $x \n";

$x=10;
$x-=1;
echo "the value of x without assignment operator : $x \n";

$x=10;
$z=$x--;
echo "the value of x using post Increment assignment operator : $x and $z \n";

$x=10;
$z=--$x;
echo "the value of x using pre Increment assignment operator : $x and $z \n";