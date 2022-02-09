<?php
//wap in php to show var-to-var-reference 

$x='10';
echo $x;

echo PHP_EOL;
$x = 'asfak';
echo $x;

echo PHP_EOL;
$z = '50';
echo $z;

echo PHP_EOL;
$a = 'ansari';
$$a = 500;
printf("the value of ansari = %s",$ansari);

echo PHP_EOL;
$w = '_100';
$$w = 'saniya';
printf("the value of w = %s \n",$w);
printf("the value of king = %s \n",$$w);
printf("the value of _100 = %s \n",$_100);

$exp='x';
echo $exp;
echo PHP_EOL;
echo getType($exp);
echo $$exp;

echo PHP_EOL;
$student['name']='Arsh';
$student['class']='Diploma';
foreach($student as $key => $value){
	$$key=$value;
	printf("%s : %S \n",$key,$value);
}
echo $name;
echo PHP_EOL;
echo $class;
echo PHP_EOL;
echo 'Without Using variable to variable';
echo PHP_EOL;

$car['name']='Maruti';
$car['class']='A Class';
$car['price']='5.5 Lakhs';

printf("The name of car:%s \n",$car['name']);
printf("The class of car:%s \n",$car['class']);
printf("The price of car:%s \n",$car['price']);

extract($car);

printf("The name of car:%s \n",$name);
printf("The class of car:%s \n",$class);
printf("The price of car:%s \n",$price);

?>