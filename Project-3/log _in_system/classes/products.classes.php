<?php

class Products extends Dbh {

    public function viewProducts() {

        $uid = $_SESSION['login'];

        $stmt = $this->connect()->prepare("SELECT * FROM products WHERE user_id = '$uid'");


        $table='<a href="?do=add" class="m-3 btn btn-primary">Add Product</a>

        <br>

        <table class="table table-stripped table-bordered" style="width:90%;margin:auto;">

            <thead class="thead-dark">

                <tr>

                        <th>id</th>

                        <th>name</th>

                        <th>price</th>

                        <th>controls</th>     

        </tr>

        </thead>

        <tbody>';

        $counter=0;

        $product = $stmt->fetchAll();

        $rownum=0;

        $view;

    foreach($product as $row_product){




        $table .= $this->products_table(++$counter, $row_product['name'], $row_product['price'], $row_product['id']);

        $rownum++;

    }

    echo $table."</tbody></table>";

    }




    protected function products_table($counter, $name, $price, $id){

        $view = ' <tr>

        <td>'.$counter.'</td>

        <td>'.$name.'</td>

        <td>'.$price.'</td>

        <td><a href="?do=edit&id='.$id.'" class="btn btn-warning">Edit</a>

    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal'.$id.'">

Delete

</button>


<!-- Modal -->

<div style="color: black;" class="modal fade" id="exampleModal'.$id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Delete <span style="color:blue;font-weight:bold;">'.$name.'</span></h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        Are u sure to delete <span style="color:blue;font-weight:bold;">'.$name.'</span> ?

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        

        <a href="includes/delete_products.inc.php?id='.$id.'&do=confirm" class="btn btn-danger">Confirm</a>

      </div>

    </div>

  </div>

  

</div>

</td>

</tr>';

return $view;

    }




    




    protected function setProduct($name, $price, $uid){

        // $uid = $_SESSION['login'];

        $stmt = $this->connect()->prepare("INSERT INTO products (name, price, user_id) VALUES ('$name', '$price', '$uid')");




        if(!$stmt -> execute()){

            $stmt = null ;

            header("location:../products.php?do=add&error=stmt failed");

            exit();




        }




    }

    protected function checkProduct($name, $uid) {

        // $uid = $_SESSION['login'];

        $stmt = $this->connect()->prepare("SELECT * FROM products WHERE name = '$name' AND user_id = '$uid'");




        if(!$stmt -> execute()){

            $stmt = null ;

            header("location:../products.php?do=add&error=stmt failed");

            exit();

        }




        $checkResult;

        if($stmt->rowCount() > 0){

           $checkResult = false;

        } else {

            $checkResult = true;

        }




        return $checkResult;

    }


    // view edit product with values

    protected function getEditProduct($id, $uid) {

        $stmt = $this->connect()->prepare("SELECT * FROM products WHERE id = '$id' AND user_id = '$uid'");




        if(!$stmt -> execute()){

            $stmt = null ;

            header("location:../products.php?do=edit&error=stmt failed");

            exit();

        }

        $product = $stmt->fetchAll();

        $name = $product[0]['name'];
        $price = $product[0]['price'];
        $editForm = '

        <form method="post" action="includes/edit_products.inc.php" style="width:90%;margin:auto;" enctype="multipart/form-data">

        <input type="hidden" name="id" value="'.$id.'">

        <div class="form-group">

            <label for="exampleInputEmail">Name</label>

            <input type="hidden" name="name"   value="'.$name.'">

            <input class="form-control" type="text"  disabled  value="'.$name.'" id="exampleInputEmail" placeholder="Name">

        </div>


        <div class="form-group">

            <label for="exampleInputEmail">price</label>

            <input class="form-control" type="number" name="price" value="'.$price.'" id="exampleInputEmail"  placeholder="price">

        </div>

    
          <input type="submit" name="submit" class="btn btn-primary" value="Edit">
        </form>

        ';

        echo $editForm;




    }


    protected function editProduct($price, $name, $uid){

        if($this->checkProduct($name, $uid) == true){

            // product doesn't exist!

            header("location:../products.php?do=edit&error=product doesn't exist!");

            exit();

       }

        $stmt = $this->connect()->prepare("UPDATE products SET price = '$price' WHERE name = '$name' AND user_id = '$uid'");




        if(!$stmt -> execute()){

            $stmt = null ;

            header("location:../products.php?do=edit&error=stmt failed");

            exit();

        }




      

    }




    // delete product by name

    protected function deleteProductN($name, $uid){




        $stmt = $this->connect()->prepare("DELETE FROM products WHERE name = '$name' AND user_id = '$uid'");




        if(!$stmt -> execute()){

            $stmt = null ;

            header("location:../products.php?do=delete&error=stmt failed");

            exit();

        }


    }




     // delete product by id

     protected function deleteProductId($id, $uid){

       

        $stmt = $this->connect()->prepare("DELETE FROM products WHERE id = '$id' AND user_id = '$uid'");




        if(!$stmt -> execute()){

            $stmt = null ;

            header("location:../products.php?do=delete&error=stmt failed");

            exit();

        }




      

    }

}