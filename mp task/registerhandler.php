<?php
include __DIR__.'/db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];

$sql = "INSERT INTO register(name,email,contact,password)VALUES('$name','$email','$contact','$password')";
if($run = mysqli_query($conn,$sql)){
    header("location:login.php");
}else{
    echo "User Cannot Register!!";
}
?>