<?php

//wap in php to convert array of object to associative array

$json = file_get_contents(__DIR__.'/student.json');
$student_array = json_decode($json,true);
$students = $student_array['data'];

?>