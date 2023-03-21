<?php
$nums = [10, 100, -20, 50, 30];

$m=0;
foreach($nums as $num){
    if($num >= $m ){
        $m = $num;
    }
}
echo $m;
// Output
100