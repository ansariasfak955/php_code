<?php 

include __DIR__.'/db.php';

$name = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM register WHERE name = '$name' AND password = '$password'";
$run = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($run);
 
if (is_array($result)) {
	session_start();
	$_SESSION['validUser'] = $result['name'];
	header("location:welcome.php");

}else{
	echo "<script>alert('Username or Password incorrect!!')</script>";
	echo "<script>location.href = 'login.php'</script>";
}


 ?>