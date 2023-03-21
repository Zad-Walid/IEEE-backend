<?php
$nums = [5, 10, 20, 5, 30, 40];
function value($x){
    return  $x>5;}
echo array_reduce(array_filter($nums,"value"),fn($carry,$item)=>$carry+$item);

