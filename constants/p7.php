<?php

//wap in php to show constant are global


define('GRAVITY',10);
printf("The value of GRAVITY AT GLOBAL SCOPE : %d \n",GRAVITY);

$gravity = 9.8;
printf("The value of gravity AT GLOBAL SCOPE : %d \n",$gravity);

function test(){
printf("The value of GRAVITY AT LOCAL SCOPE : %d \n",GRAVITY);

printf("The value of gravityat local SCOPE : %d \n",$gravity);
}

test();

?>