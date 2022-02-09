<?php

#step1 : make connection
include __DIR__ .'\dbconnect.php';

#step2 : prepare the query

$id = readline('enter userid :');
$sql = "Delete from emp where id = '{$id}';";


#step3 : execute the query or fire the query
if(mysqli_query($conn,$sql))
{
	if(mysqli_affected_rows($conn)>0)
	{
		echo 'Record deleted successfully';
	}
	else
	{
		echo 'Connot delete either record dose not exits or Id is wrong';
	}
}
else
{
	echo 'Record not deleted '.mysqli_error($conn);
}


?>