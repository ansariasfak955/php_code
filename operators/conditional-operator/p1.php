<?php

//wap in php to show example of if-else
	
$a=readline('enter the a value :');

if($a>2){$x='hi';}else{$x='hello';}

echo "the value of x using if-else $x \n";

$x=($a>2)?'hi':'hello';
echo "the value of x using ternary $x R to L \n";

//($a>2)?$x='hi':$x='hello';
//echo "the value of x using ternary $x L to R \n";