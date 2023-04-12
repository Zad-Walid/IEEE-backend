<?php

$fileSize= filesize("C:\xampp\htdocs\projects\New Text Document.txt");
echo number_format($fileSize/1024/1024 , 2);
echo "<br>";
echo number_format($fileSize/1024 , 2);