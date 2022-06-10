<?php

ob_clean();     //cleaned the output buffer of header.php

//print_r($_SERVER);
$conn = mysqli_connect(
    $_SERVER['DB_HOST'],
    $_SERVER['DB_USER'],
    $_SERVER['DB_PASSWORD'],
    $_SERVER['DB_NAME']
);

print_r($conn);

exit();     //terminate this script so that footer cannot run here



?>