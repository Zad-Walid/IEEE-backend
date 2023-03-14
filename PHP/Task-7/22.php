<?php
function multiply(...$values){
    $m=1;
    foreach($values as $value){
        if(gettype($value)=="string"){
            continue;
        }
        if(gettype($value)=="double"){
            $value=(int)$value;
        }
        $m=$m*$value;
    }
    return $m."<br>";
}

// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000