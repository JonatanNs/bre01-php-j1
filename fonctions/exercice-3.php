<?php

function isOdd( int $number) : bool {
    if ($number % 2 === 0){
        return true;
    } else {
        return false;
    }
    
}

var_dump(isOdd(12));
echo "<br>";
var_dump(isOdd(29));
echo "<br>";

?>