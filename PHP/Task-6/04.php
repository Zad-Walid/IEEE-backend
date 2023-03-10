<?php
/*"C:/xampp/htdocs"
"localhost"
"C:\WINDOWS"
"C:/xampp/apache/bin/openssl.cnf"*/

echo __DIR__;
echo '<br>';
echo $_SERVER["HTTP_HOST"];
echo '<br>';
echo $_SERVER["SystemRoot"];
echo '<br>';
echo $_SERVER["OPENSSL_CONF"];

?>