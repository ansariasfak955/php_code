<?php
$no1 = readline('enter the no 1:');
$no2 = readline('enter the no 2:');
echo add($no1,$no2);

function add($no1=0,$no2=0){
return $no1+$no2;
}

printf("The result with 0 = Argument = %d \n",add());
printf("The result with 1 = Argument $no1 = %d \n",add($no1));
printf("The result with 1 = Argument $no2 = %d \n",add($no2));
printf("The result with 2 = Argument = %d \n",add($no1,$no2));
?>