<?php

//Create a timesheet application for employees, each employee should have a 
//reporting manager. The employees should be able to fill the timesheet.
//Once the timesheet is filled up, the manager should be able to rate the 
//employee on a scale of 1 to 5. Once the employee has been rated for a particular day,
// he would not be able to make any changes to the timesheet


define("HOST","localhost:3308");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","app2022");

$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
if($conn){
    echo "Connection Successfully";
}else{
    echo "Connection Failed!!";
}

?>