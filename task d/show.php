<?php

include __DIR__.'/dbconnect.php';

$query = "SELECT * FROM task_tbl";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
    echo "<table border='1' width='100%' cellpading='6px' cellspacing='0'>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Number</th>
        <th>Email</th>
        <th>Password</th>
        <th>Cpassword</th>
    </tr>";
    while ($rows = mysqli_fetch_assoc($result)){
        echo "<tr>
            <td>".$rows['id']."</td>
            <td>".$rows['name']."</td>
            <td>".$rows['number']."</td>
            <td>".$rows['email']."</td>
            <td>".$rows['password']."</td>
            <td>".$rows['cpassword']."</td>

            </tr>";
    }
}

?>