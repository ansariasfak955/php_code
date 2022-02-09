<?php

//wap in php to boolean data type stored in variables 

$x=true;  //Non case sensitive
echo $x;
echo PHP_EOL;
echo getType($x);  //boolean
echo PHP_EOL;
var_dump($x);  //boolean(true)

echo PHP_EOL;

$z=TRUE;  //Non case sensitive
echo $z;
echo PHP_EOL;
echo getType($z);  //boolean
echo PHP_EOL;
var_dump($z);  //boolean(true)

echo PHP_EOL;

$y=TrUe;  
echo $y;
echo PHP_EOL;
echo getType($y);  
echo PHP_EOL;
var_dump($y);  


echo PHP_EOL;
echo 'on Comparing all the three values ';
echo PHP_EOL;
echo (true==TRUE);
echo PHP_EOL;
echo (true==TRUE);
echo PHP_EOL;
echo (1==true);
echo PHP_EOL;
var_dump(1==true);
?>