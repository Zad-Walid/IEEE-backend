<?php

if(isset($_POST["submit"]))
{
    //grabing data
    $uid = $_POST["username"];
    $pwd = $_POST["pwd"];



    //instantiate signupcontr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($uid ,$pwd);

    //running error handlers and user signup
    $login ->loginUser();


    //going back to the front page
    header("location: ../index.php?error=none");


}