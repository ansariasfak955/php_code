<?php

//wap in php to show consonants and vowels

$x = readline("enter the character :");
(gettype($x=='string') and strlen($x)==1 and ctype_alpha($x))?:exit('Invalid Value Supplied.');

$output='';
switch(strtolower($x)){
	case 'a':
	  $output='vowel';
	break;
	
	case 'e':
	  $output='vowel';
	break;
	
	case 'i':
	  $output='vowel';
	break;
	
	case 'o':
	  $output='vowel';
	break;
	case 'u':
	  $output='vowel';
	break;
	
	default:
	   $output='consonants';
	break;
}
echo $output;