<?php
mkdir("Programming/PHP",0711,TRUE);

if(file_exists("Programming/PHP")){
    rmdir("Programming/PHP");

}if(file_exists("Programming")){
    echo rmdir("Programming");

}
?>
