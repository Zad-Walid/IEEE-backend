<?php

$handle= fopen("elzero.txt","r");
echo fread($handle,24);
echo "<br>";
rewind($handle);
echo fgets($handle);
echo fgets($handle);
echo "<br>";
echo file_get_contents("elzero.txt",true,Null,0,24);
echo "<br>";
rewind($handle);
for($i=0;$i<25;$i++){
    echo fgetc($handle);
}
?>
