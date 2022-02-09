<?php

//wap in php to find perfact number

$a=readline('enter the n value :');
$sum = 0;
for($i=1;$i<$a;$i++){
	if($a%$i==0){
		$sum  = $sum + $i;
	}
}
if($sum==$a){
	echo 'No is perfact ';
}
else
{
	echo 'No is not perfact';
}