<?php

$code = "<?php \n\n";
$code .= "//wap in php to show only valid 256 cases in switch \n";

$code .= '$n = readline("Enter the no B/w 1 to 256 :");'." \n";
$code .= 'switch($n){ '."\n";

for($i=1;$i<256;$i++)
{
	$code .= 'case '.$i.':'." \n";
	$code .= 'echo '.'"case '.$i.' is executing \n";'."\n";
}
$code .= "default: \n";
$code .= 'echo '.'"default case 10 is executing \n";'."\n";
$code .= "}";

$fp = fopen("p9.php","w+");  //$fp : resourse of file pointer open p1.php in memory with write and read mode

fwrite($fp,$code);  //fwrite function write in file 
fclose($fp);  //function to free the memory.