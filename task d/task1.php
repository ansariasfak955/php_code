<?php

function gcd($x, $y){
    if($y == 0)
    return $x;
    return gcd($y, $x%$y);
}
$x = 50;
$y = 100;

echo "GCD of $x and $y is : ".gcd($x,$y);

?>