<?php

//wap in php to find odd and even 

$n=readline('enter the number :');
if($n%2==0){
	echo 'no is even';
	goto exit_label;
}
echo 'no is odd';
exit_label:;

?>