<?php

$index = 0;

for($index = 2 ;$index <=20 ; $index = $index +2){
    echo $index;
    echo "<br>";
}


while ($index <= 20){
    if ($index !== 0 ){
        echo $index;
        echo "<br>";
        $index = $index +2 ;}
}

do{
    if ($index !== 0 ){
        echo $index;
        echo "<br>";
        $index = $index +2 ;}
}while($index <= 18);


?>
