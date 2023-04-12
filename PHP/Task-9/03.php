<?php

$num1 = 11.5; // 11
echo round($num1 ,0,PHP_ROUND_HALF_ODD);
echo "<br>";
$num2 = 9.4898; // 9.5
echo round($num2 ,1);
echo "<br>";
$num3 = -7.5; // -7
echo round($num3 ,0,PHP_ROUND_HALF_DOWN);
?>