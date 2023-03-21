<?php
$arr = ["A", "B", "C", "D", "E"];
$num = 0;
for ($i=0;$i<count($arr);$i++){
    if($arr[$i]){
        $x= 1;
    }
    $num +=$x;
}
echo $num;
// Output
5