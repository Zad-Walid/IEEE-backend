<?php
$chars = ["A", "B", "C"];


array_push($chars,"D");
$chars[]="D";
$chars[count($chars)]="D";
print_r(array_merge($chars,$added_char));
