<?php

if(isset($_POST["submit"]) || isset($_GET["do"]))
{
     // Instantiate ProductsContr class
    include "../classes/dbh.class.php";
    include "../classes/products.class.php";
    include "../classes/products-contr.class.php";
   
    
    if(isset($_POST['name'])){

        // Grabbing the data
    $name = $_POST['name'];
    $price = null;

    $product = new ProductsContr($name, $price);

    // Running Error Handlers and User Signup
    $product->delete_ProductN();

    // Heading back to home page
    header("location:../products.php");

    } 

elseif (isset($_GET['id'])) {
          // Grabbing the data
    $id = $_GET['id'];
   

    $product = new ProductsContr($id);

    // Running Error Handlers and User Signup
    $product->delete_ProductId();

    // Heading back to home page
    header("location:../products.php");
}
}