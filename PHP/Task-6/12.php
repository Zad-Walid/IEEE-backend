<?php
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
// $d = ???;
$d = $a." ". $b." ". $c;
echo $d;
echo '<br>';
// Method Two
// $d = ???;
$d = "$a $b $c" ;
echo $d;
echo '<br>';
// Method Three
// $d = ???;
$d = "{$a} {$b} {$c}";
echo $d;
echo '<br>';
// Method Four
// $d = ???;
$d = $d ="{$a} {$b} " .$c;
echo $d;
echo '<br>';
 // Elzero Web School
?>