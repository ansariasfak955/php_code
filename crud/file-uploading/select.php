<?php

include_once __DIR__.'/query-builder/Query.php';

$query = new Query();
$record = $query->select('*')->table('upload')->allRecords();
//print_r($record);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img
        {
            height: 100px;
        }
    </style>
</head>
<body>


<table>
    <tr>
        <th>Id</th>
        <th>Image</th>
    </tr>
    <?php foreach($record as $data):  ?>
    <tr>
        <td><?php echo $data->id; ?></td>
        <td><?php echo "<img src='uploads/{$data->filename}'>";?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>