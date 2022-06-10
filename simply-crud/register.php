<?php

require_once __DIR__.'/dbconnect.php';
if(isset($_POST['submit']) and !empty($_POST)){
    $name = $_POST['name'];
    //echo $name;

    $email = $_POST['email'];
    //echo $email;

    $mobile = $_POST['number'];
    //echo $mobile;

    $sql = "INSERT INTO register(name,email,mobile) values('$name','$email','$mobile')";
    if(mysqli_query($conn,$sql)){
        echo "Recorded inserted";
    }else{
        echo "Record Cannot Inserted";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="post">
    <p>Register Form</p>
    <hr/>
    Name : <br><input type="name" name="name"><br>
    Email : <br><input type="email" name="email"><br>
    Mobile No : <br><input type="number" name="number"><br>
    <input type="submit" value="Submit" name="submit">
    </form>
    <?php require_once __DIR__.'/show.php'; ?>
</body>
</html>