<?php
// Write Function Content Here

function Say_hello($name,$gender = ""){
    if($gender == "Male"){
        echo "Hello Mr $name";

    }
    elseif($gender == "Female"){
        echo "Hello Miss $name";

    }
    else{
        echo "Hello  $name";

    }

}

Say_hello("Osama","Male");
Say_hello("Emman","Female");
Say_hello("Sameh");
