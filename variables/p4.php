<?php

//wap in php to show boolean false stored in variable

$x=false;
echo $x;  //nothing
echo PHP_EOL;
echo getType($x);  //boolean
var_dump($x);  //bool(false)
echo PHP_EOL;
echo json_encode($x);  //raw format

echo PHP_EOL;
echo 'On comparing the value:';
echo (false==False);
echo PHP_EOL;
echo (false==FALSE);
echo PHP_EOL;
var_dump(0==FALSE);
echo PHP_EOL;
var_dump(0==false); //false is optional match content
echo PHP_EOL;
var_dump(0==(int)false);  //Implicit type conversion  //PHP Dynamic
echo PHP_EOL;
var_dump(0===false);  //content match and type match = false


printf("%s","Saniya");
echo PHP_EOL;
printf("%d",10);
echo PHP_EOL;
printf("%b",true);
echo PHP_EOL;
printf("%d",1);
echo PHP_EOL;
printf("%d",true);
echo PHP_EOL;
echo 1101;
?>