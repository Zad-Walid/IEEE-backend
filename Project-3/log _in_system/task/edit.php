<?php

if(isset($_GET["id"]))
{

    // Grabbing the data

    $id = $_GET['id'];
    $uid=$_SESSION['login'];
    
    // Instantiate ProductsContr class
    include "classes/dbh.classes.php";
    include "classes/products.classes.php";
    include "classes/products-contr.classes.php";
    $product = new ProductsContr($id);

    // Running Error Handlers and Edit product
    $product->get_editProduct();

} 