<?php

//wap in php to find the reverse number

$no=readline('enter the no :');
$count=count(str_split($no));

$sum=0;
for(;$no!=0;$count--){
	$q=$no/10;
	$rem=$no%10;
	$ef=$rem * (pow(10,$count-1));
	$sum=$sum+$ef;
	$no=$q;
}
echo $sum;