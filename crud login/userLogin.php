<?php

include __DIR__.'/db.php';

$email = $_POST['email'];
$password = $_POST['password'];


$query = "SELECT * FROM register WHERE name = '$email' AND password '$password'";

echo $query; die();


$run = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($run);

if(is_array($result)){
    //echo "successfull login";
    session_start();
    $_SESSION['validUser'] = $result['email'];
    header("location:welcome.php");
}else{
    echo "<script>alert('Useremail or Password incorrect!!')</script>";
    echo "<script>location.href = 'login.php'</script>";
}

?>