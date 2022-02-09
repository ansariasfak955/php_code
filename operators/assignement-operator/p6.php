<?php

//wap in php to show Not(.) assignment operators or concate assignment operator

$sum = 'good';
$a='morning';

$sum = $sum.$a;
echo "the value of sum without assignment : $sum \n";
$sum='good';
$a='morning';

$sum .=$a;
echo "the value of sum with assignment : $sum \n";