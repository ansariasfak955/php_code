<?php

//wap in php to show chaining 

$n = readline('enter the no B/W 1 to 9 :');
$i=1;
switch($n){
	case 1:
	   echo "case 1 is executing \n";
	   goto exit_label;
	   
	case 2:
	   echo "case 2 is executing \n";
	   break;
	   
	case 3:
	   echo "case 3 is executing \n";
	   break;
	
	case 4:
	   echo "case 4 is executing \n";
	   break;
	   
	case 5:
	   echo "case 5 is executing \n";
	 
	default:
	echo "executing...";
	   
}
exit_label:;


?>