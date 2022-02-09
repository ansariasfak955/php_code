<?php

//wap in php to show difference B/w predefined error level and user-defined error level 

error_reporting(E_USER_NOTICE);

printf("The value of ture : %d \n",true);
printf("The value of TRUE : %d \n",TRUE);
printf("ture is Incase-sensitive constant : %d\n",(TRUE==1));
define('true',10,1);
printf("The value of ture after redeclaration : %d \n",true);

?>