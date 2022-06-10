<?php

include __DIR__."/dbconnect.php";
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$query = "INSERT INTO task_tbl(name,number,email,password,cpassword)VALUES('$name','$number','$email','$password','cpassword')";

$run = mysqli_query($conn,$query);
if($run){
    //echo "Record Inserted Successfully";
    echo "<script>location.href = 'show.php'</script>";
}else{
    echo "Record Cannot Inserted.";
}

?>