<?php

//wap in php to show consonants and vowels with multi-case

$x = readline("enter the character :");
(gettype($x=='string') and strlen($x)==1 and ctype_alpha($x))?:exit('Invalid Value Supplied.');

$output='';
switch($x){
	case 'a':
	case 'A':
	  $output='vowel';
	break;
	
	case 'e':
	case 'E':
	  $output='vowel';
	break;
	
	case 'i':
	case 'I':
	  $output='vowel';
	break;
	
	case 'o':
	case 'O':
	  $output='vowel';
	break;
	case 'u':
	case 'U':
	  $output='vowel';
	break;
	
	default:
	   $output='consonants';
	break;
}
echo $output;