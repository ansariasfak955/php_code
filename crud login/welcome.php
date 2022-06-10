<?php

session_start();
if(!isset($_SESSION['validUser'])){

}
echo "<h1 style='text-transform:uppercase;'>Welcome : ".$_SESSION['validUser']."</h1>";

?>