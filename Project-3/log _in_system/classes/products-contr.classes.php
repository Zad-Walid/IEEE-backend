<?php

if (session_status() == PHP_SESSION_NONE) {

    session_start();

 }

class ProductsContr extends Products {


    private $name;

    private $price;

    private  $id;

    private  $uid;


    public function __construct() {

        $arguments = func_get_args();

        $numberOfArguments = func_num_args();




        $constructor = method_exists(

            $this,

            $fn = "__construct" . $numberOfArguments

        );




        if ($constructor) {

            call_user_func_array([$this, $fn], $arguments);

        } else {

            print "No matching constructor found" . PHP_EOL;

        }

    }




    public function __construct1($id){

        $this->id = $id;

        $this->uid=$_SESSION['login'];

    }

    public function __construct2($name, $price){

        $this->name = $name;

        $this->price = $price;

        $this->uid=$_SESSION['login'];




    }



    public function set_Product() {

       

        if($this->emptyInput() == false){

        //     empty input!

            header("location:../products.php?do=add&error=empty input");

            exit();

        }




        if($this->invalidName() == false){

        //     invalid Username!

            header("location:../products.php?do=add&error=invalid name!");

            exit();

        }




        if($this->checkProduct($this->name, $this->uid) == false){

            // product already exist!

            header("location:../products.php?do=add&error=product already exist!");

            exit();

        }




        $this->setProduct($this->name, $this->price, $this->uid);

    

       

    }

    public function get_editProduct() {




        $this->getEditProduct($this->id, $this->uid);




    }




    public function update_product() {

      $this->editProduct($this->price, $this->name, $this->uid);

    }




    public function delete_ProductN() {

        if($this->checkProduct($this->name, $this->uid) == true){

            // product doesn't exist!

            header("location:../products.php?do=delete&error=product doesn't exist!");

            exit();

        }




        $this->deleteProductN($this->name, $this->uid);

      }

  

    public function delete_ProductId() {

        $this->deleteProductId($this->id, $this->uid);

      }


    private function emptyInput() {

        $result;

        if(empty($this->name) || empty($this->price)) {

            $result = false;

        } else {

            $result = true;

        }

        return $result;

    }

    private function invalidName() {

        $result;

        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->name)) {

            $result = false;

        } else {

            $result = true;

        }

        return $result;

    }   

}