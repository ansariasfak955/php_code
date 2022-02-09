<?php

$data = array(
'name'=>'asfak',
'class'=>'diploma',
'rollno'=>1001,
);

echo <<<FORM

<h1>STUDENT FORM</h1>
<hr/>
<form>

   <p>
   Name:<input type="text" value="{$data['name']}">
   </p>
   
   <p>
   class:<input type="text" value="{$data['class']}">
   </p>
   
   <p>
   rollno:<input type="text" value="{$data['rollno']}">
   </p>
   
   </form>
   
FORM;