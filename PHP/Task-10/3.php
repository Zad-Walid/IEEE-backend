<?php

date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get()."<br>";
$date ="1990-10-01";
$t=time();
$d = (strtotime($date) - strtotime($t));
$days=$d /60 /60 /24 ."<br>";
$years=$d /60 /60 /24 /365 ."<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately $days Days <br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately $years Years";
?>