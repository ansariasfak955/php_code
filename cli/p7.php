<?php
$name = '    saniya    ';
echo $name;
printf("the length of the name is = %d",strlen($name));

$clean_name = trim($name);
echo PHP_EOL;
echo $clean_name;
printf("the length of the name is = %d",strlen($clean_name));
?>