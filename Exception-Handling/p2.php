<?php

//wap in php to show Exception Handling

$x=readline('enter the x value : ');
$y=readline('enter the y value : ');
$result = 0;

try{
	echo "block of try srarted....\n";
	
	if($y==0){
		throw new Exception;
	}else{
		$result = $x/$y;
	}
	
	echo "block of try endeded....\n";
}
catch(Exception $e){
	echo "some exception raised ".$e->getMessage();
	echo "\n";
}
finally{
	echo "this block will be, execute....\n";
	
	echo "the result = $result \n";
}


?>