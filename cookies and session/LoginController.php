<?php

require_once __DIR__.'/Query-Bilder/updatequery.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = new Query();
$user = $query->select('*')->table("user")->where([
    'email'=>$email,
    'password'=>$password,
])->first();

if($user){
    session_start();
    $_SESSION['validUser'] = $user;
    if($user->user_type == '1'){
        //admin
        header("Location:admin/");
    }else if($user->user_type == '2'){
        //user
        header("Location:user/");
    }
}else{
    echo "<script>window.alert('Invali lOGIN')</script>";
    echo "<script>window.location.href='index.php?error=login-failed';</script>";
}

?>