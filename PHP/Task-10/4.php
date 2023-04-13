<?php

date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get()."<br>";

$date =date_create("1990-10-01");
$t=date_create("2023-04-13");
$d = date_diff($date,$t);
$days=$d->days ."<br>";
$years=$d->y;
echo "From Epoch Time Till 1990-10-01 Is Approximately $days Days <br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately $years Years <br>";