<?php
//wap in php to nullable and empty 

$x='';
var_dump($x);

var_dump($x=='');
var_dump($x=="");
var_dump($x==="");
var_dump($x==='');
var_dump(empty($x));
var_dump(empty(''));
var_dump(empty(""));
$y="";
var_dump($x);
echo PHP_EOL;
var_dump($x==$y);
echo PHP_EOL;
var_dump($x===$y);
echo PHP_EOL;
echo 'Be aware B/w empty and "<space>"';
echo PHP_EOL;
printf("the value from empty :",'');
echo PHP_EOL;
printf("the value from empty :",' ');
echo PHP_EOL;
var_dump(''==' ');
var_dump(''===' ');

echo PHP_EOL;
echo '';
echo PHP_EOL;
echo getType('');
echo PHP_EOL;
echo strlen('');
echo PHP_EOL;
echo '';
echo PHP_EOL;
echo getType(' ');
echo PHP_EOL;
echo strlen(' ');
echo PHP_EOL;
echo ord('');  //Ascii
echo PHP_EOL;
echo ord('a');   //Ascii
?>