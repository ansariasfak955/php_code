<?php

//wap in php to show logical operator And


$a=readline('enter the a value in range :');

var_dump($a != 10);
//var_dump($a<10 || $a>10);
//var_dump(!($a==10) && $a>10);
var_dump(!(!($a<10) && !($a>10)));  //