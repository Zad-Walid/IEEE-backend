<?php

session_start();
session_unset();
session_destroy();

    //going back to the front page
    header("location: ../index.php?error=none");