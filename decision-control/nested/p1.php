<?php

//wap in php to show number is prime or not from range 1 to 100


$n=readline('enter the number :');
if($n<=100){
	if($n%2==0){
		if($n==2)
			echo "$n is prime";
		else
			echo "$n no is not prime ";
		
	}
	
	else if($n%3==0){
		if($n==3)
			echo "$n is prime";
		else
			echo "$n no is not prime ";
		
	}else if($n%7==0){
		if($n==7)
			echo "$n is prime";
		else
			echo "$n no is not prime ";
		
	}
	else if($n%11==0){
		if($n==11)
			echo "$n is prime";
		else
			echo "$n no is not prime ";
		
	}else{
		echo "$n no is prime";
	}
}else{
	echo 'enter the number less then or equal to 100';
}



?>