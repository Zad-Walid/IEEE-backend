<?php

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

function odd($x){
    if(gettype($x)=="string"){
        $x="";
    }elseif($x %2!=0){
        return $x;
    }else{
        $x=0;
    }
}
echo '<pre>';
print_r(array_values(array_filter($mix,"odd")));
echo '</pre>';
