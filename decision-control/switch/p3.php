<?php

//wap in php to show odd and even default case in switch

$x = readline("enter the x value :");
switch($x%2){ // s(remainders)={0,1} T(case) = 2 1 -> default (n-1)  --> case
	case 0:
	echo "$x is = even";
	break;
	
	default:
	echo "$x is odd";
	break;
} 