<?php
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
  ];
  
  // Output

echo "<pre>";
print_r(array_reverse(array_flip(array_map(fn($x)=>strtolower($x),$friends))));
echo "</pre>";
 