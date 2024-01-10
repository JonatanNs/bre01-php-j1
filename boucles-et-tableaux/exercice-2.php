<?php 

$numbers = [28, 32, 44, -67, 18, 24, -98];

foreach($numbers as $key => $negatifs){
    
    if($negatifs < 0){
        echo $negatifs;
        echo "<br>";
    };
};

?>