<?php

//wap in php to show foreach array
$data=[
[
'id'=>'1',
'name'=>'asfak',
'class'=>'Diploma'
],

[
'id'=>'2',
'name'=>'saniya',
'class'=>'BA'
],

[
'id'=>'3',
'name'=>'Abulkaish',
'class'=>'ITI'
],
];

foreach($data as $user){
	echo "----------------------\n";
	echo "user id = {$user['id']} \n";
	echo "user name = {$user['name']} \n";
	echo "user class = {$user['class']} \n";
	echo "----------------------\n";
}


?>