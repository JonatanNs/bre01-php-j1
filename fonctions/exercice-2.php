<?php

function average($numbers) :float {
    $sum = 0;
    foreach($numbers as $key => $value){
        $sum += $value;
    }
    return $sum / count($numbers);
}

echo average([12, 15, 18, 9])."<br>";
echo average([12, 15, 18, 11, 14])."<br>";

?>
