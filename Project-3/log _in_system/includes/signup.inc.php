<?php

if(isset($_POST["submit"]))
{
    //grabing data
    $uid = $_POST["username"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];


    //instantiate signupcontr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid ,$pwd , $pwdRepeat ,$email);

    //running error handlers and user signup
    $signup ->signupUser();


    //going back to the front page
    header("location: ../index.php?error=none");


}