<?php

if(!isset($_GET["do"]))
{


    // Instantiate products class
    include "classes/dbh.classes.php";
    include "classes/products.classes.php";


  
    $product = new Products();

 
    $product->viewProducts();
    



}