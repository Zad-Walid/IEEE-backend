<div style="width:80%;margin:auto;" class= "


<?php
if(isset($_GET['error'])){
  echo "alert alert-danger";
}?>"
><?php
if(isset($_GET['error'])){
  echo $_GET['error'];
}

?>
</div>

<form method="post" action="includes/delete_products.inc.php" style="width:80%;margin:auto;" enctype="multipart/form-data">
<input type="hidden" name="user_id" value=<?php echo $_SESSION['login']; ?>>
<div class="form-group">
    <label for="exampleInputEmail">Name</label>
    <input class="form-control" type="text" name="name" id="exampleInputEmail"  placeholder="Name">
</div>


   
<input type="submit" name="submit" class="btn btn-danger" value="delete">


</form>