<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width ,initial-scale=1.0">
	<title> Document </title>
    <link rel="stylesheet" type="text/css" src="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800" src_type="url"/>  
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>

<header>
    <nav>
        <div>
            <h3>ZAD</h3>
            <ul class="menu-main">
                <li><a herf="index.php">HOME</a></li>
                <li><a herf ="#">PRODUCTS</a></li>
                <li><a herf="#">CURRENT SALES</a><li>
                <li><a herf="#">MEMBER+</a></li>
            </ul>
        </div>
        <ul class="menu-member">
            <?php
              if(isset($_SESSION["userid"]))
              {
            ?>
                <li><a herf ="a"><?php echo $_SESSION["userid"]?></a></li>
                <li><a herf="includes/login.inc.php" class ="header-login-a">LOGout</a><li>
            <?php
              }
              else{
            ?>
                <li><a herf ="#">SIGN UP</a></li>
                <li><a herf="#" class ="header-login-a">LOGIN</a><li>
            <?php
              }
            ?>
            </ul>
    </nav>
</header>
<section class="index-intro">
    <div class ="index-intro-bg">
        <div class ="wrapper">
            <div class ="index-intro-c1">
                <div class ="vedio"></div>
                <p>HELLO! </p>
                <div>
            <div class ="index-intro-c2">
                <a herf="0">FIND OUR GEAR HERE </a>
            </div>
        </div>
    </div>
</section>
<section class="index-login">
    <div class ="wrapper">
        <div class ="index-login-signup">
            <h4> SIGN UP </h4>
            <p>Don't have any account yet ? sign up here</p>
            <form action="includes/signup.inc.php" mmethod ="post" >
                <input type ="text" name ="uid" placeholder ="Username">
                <input type ="password" name ="pwd" placeholder ="Password">
                <input type ="password" name ="pwdrepeat" placeholder ="Repeat Password">
                <input type ="text" name ="email" placeholder ="E-mail">
                <br>
                <button type ="submit"  name ="submit" >SIGN UP</button>

                <form>
                    <div class ="index-login-login">
                        <h4> LOGIN </h4>
                        <p>Don't have any account yet ? sign up here</p>
                        <input type ="text" name ="uid" placeholder ="Username">
                        <input type ="password" name ="pwd" placeholder ="Password">
                        <br>
                        <button type ="submit"  name ="submit" >LOGIN</button>
                </form>
        </div>
    </div>
</section>
<?php
if(!isset($_GET['do'])){
    include "task/view.php";;
}
elseif($_GET['do']=="add"){
    include "task/add.php";;
}elseif($_GET['do']=="edit" && isset($_GET['id'])){
    include "task/edit.php";;
}
elseif($_GET['do']=="delete"){
    include "task/delete.php";;
}
?>
</div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<div style="width:80%;margin:auto;" class= "<?php
if(isset($_GET['error'])){
  echo "alert ";
}?>"
><?php
if(isset($_GET['error'])){
  echo $_GET['error'];
}

?>
</div>

<form method="post" action="includes/edit_products.inc.php" style="width:90%;margin:auto;" enctype="multipart/form-data">

<div class="form-group">
    <label for="exampleInputEmail">Name</label>
    <input class="form-control" type="text" name="name" id="exampleInputEmail"  placeholder="Name">
</div>


<div class="form-group">
    <label for="exampleInputEmail">price</label>
    <input class="form-control" type="number" name="price" id="exampleInputEmail"  placeholder="price">
</div>

<input type="submit" name="submit" class="btn btn-primary" value="Edit">

</form>
</body>
</html>