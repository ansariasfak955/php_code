<?php

//wap in php to find the qudrant according to given quadrant conditions 


$x=readline('enter the x value :');
$y=readline('enter the y value :');

if($x>0 and $y>0)
	echo '1st qudrant';
else if($x>0 and $y<0)
	echo '4nd qudrant';
else if($x<0 and $y>0)
	echo '2nd qudrant';
else
	echo '3rd qudrant';



?>