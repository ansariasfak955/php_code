<?php
//wap in php to show re-declaration error in constant

define('gravity',10);
echo gravity;

echo PHP_EOL;

define('GRAVITY',9.8);
echo GRAVITY;

//redefine
define('gravity',9.8);
echo gravity;  //notice error

echo PHP_EOL;
printf("The value of predefined constant true :%d \n",TRUE);
define('TRUE','yes');

printf("The value of predefined constant true :%d \n",TRUE); //E_NOTICE

printf("The value of user-defined constant  gravity :%d \n",gravity); //E_USER_NOTICE
define('gravity',9.8);

printf("The value of user-defined constant  gravity :%d \n",gravity); //E_USER_NOTICE


?>