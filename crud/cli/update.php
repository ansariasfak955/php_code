<?php

#step1 : make connection
include __DIR__.'/dbconnect.php';

#step2 : prepare the query

$id = readline('Enter userid :');
$name = readline('Enter name :');
$email = readline('Enter email :');

$sql = "update emp set name='{$name}',email='{$email}' where id = '{$id}';";

#step3 : execute the query or fire the query
if(mysqli_query($conn,$sql)){
	if(mysqli_affected_rows($conn)>0){
		echo 'Record Update Successfully';
	}else{
		echo 'Record Cannot be Update';
	}
}else{
	echo 'Record Not Update Error = '.mysqli_error($conn);
}

?>