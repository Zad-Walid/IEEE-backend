<?php

if(isset($_POST["submit"]))
{
   
    
    // Grabbing the data
    $name = $_POST['name'];
    $price = $_POST['price'];
      
    
   
    
    // Instantiate ProductsContr class
    include "../classes/dbh.class.php";
    include "../classes/products.class.php";
    include "../classes/products-contr.class.php";
    $product = new ProductsContr($name, $price);

    // Running Error Handlers and User Signup
    $product->set_Product();

 
    // Heading back to products page
    header("location:../products.php");

    // }

}