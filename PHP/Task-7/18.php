<?php


$help_num = 4;
$nums = [2, 4, 5, 6, 10];

foreach($nums as $nb){
    echo "$nb"." + "."$nums[$help_num]"." =".$nb+$nums[$help_num]."<br>";
    $help_num=$help_num-1;
}
?>