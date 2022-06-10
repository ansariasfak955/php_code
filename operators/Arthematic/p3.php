<?php

//wap  in php to find the remainder without % operator.

$x=readline('enter the x value :');
$y=readline('enter the y value :');

printf("the division = %d \n",$x/$y);
printf("the division = %f \n",$x/$y);
$rem1 = $x % $y;

echo "the remainder using modulo operator = $rem1";

