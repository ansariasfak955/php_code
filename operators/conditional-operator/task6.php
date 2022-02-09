<?php

//wap in php find perfact number 

$n=readline('enter the n value :');
if(is_perfact($n)){
	echo "$n is perfact no.";
}
else {
	echo "$n is not perfact.";
}
function is_perfact($n,$i=1,$sum=0){
	if($i==$n){
		return false;
	}
	else
	{
		if($n%$i==0){
			$sum = $sum+$i;
		}
		if($sum==$n){
			return true;
		}
		return is_perfact($n,$i+1,$sum);
	}
}