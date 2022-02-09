<?php

#step1 : make connection_aborted
include __DIR__ .'\dbconnect.php';

#step2 : prepare the query

$name = readline('enter name :');
$email = readline('enter Email :');

$sql = "INSERT INTO emp(name,email) values('{$name}','{$email}');";


#step3 : execute the query or fire the query
if(mysqli_query($conn,$sql)){
	//echo 'Record Inserted with'.mysqli_insert_id($conn);
	require_once __DIR__.'/rowcount.php';
}else{
	echo 'Inserted Error'.mysqli_error($conn);
}


?>