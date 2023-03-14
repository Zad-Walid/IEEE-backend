<?php
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for($i=0; $i < count($names) ; $i++ ){

    if($names[$i] == "Sayed" || $names[$i] == "Osama" ){
        echo $names[$i];
        echo "<br>";
        
    }
}
?>