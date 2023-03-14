
<?php
$mix = [1, 2, "A", "B", "C", 3, 4];
$count_char = 0;
$count_num = 0;
for($i=0; $i < count($mix) ; $i++ ){
    if($i == 2 || $i == 3 || $i == 4){
        $count_char ++; 
        continue;
        
    }
    else{
        echo $mix[$i];
        $count_num ++;
        echo "<br>";
   
    }
}
echo "<br>";
echo $count_char;
echo "<br>";
echo $count_num;
?>

