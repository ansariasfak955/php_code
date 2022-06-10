<?php

function gcd($a, $b){
    if($b == 0)
    return $a;
    return gcd($b, $a % $b);
}

function findlcm($arr, $n){
    $ans = $arr[0];
    for($i=1; $i<$n; $i++)
    $ans = ((($arr[$i] * $ans)) / (gcd($arr[$i], $ans)));
    return $ans;
}
$arr = array(22,34);
$n = sizeof($arr);
echo findlcm($arr, $n);

?>