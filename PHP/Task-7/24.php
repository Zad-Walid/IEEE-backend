<?php
function calculate($num_one,$num_two,$calc=""){
    switch($calc){
        case"a":
            return $num_one+$num_two."<br>";
        case"s":
        case"subtract":
            return $num_one-$num_two."<br>";
        case"m":
        case"multiply":
            return $num_one * $num_two."<br>";
        default:
        return $num_one+$num_two."<br>";
    }
}

// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200