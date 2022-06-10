<?php

include_once __DIR__.'/dbconnect.php';

$id = $_GET['id'];
$query = "DELETE FROM register WHERE id = $id";
$run = mysqli_query($conn,$query);
if($run){
    echo "<script>alert ('Record Delete Successfully.')</script>";
    echo "<script>location.href = 'show.php</script>";
}

?>