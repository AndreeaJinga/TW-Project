<?php

    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($fullUrl, "error=emptyinput") == true)
    {
        echo "<script>alert('You did not fill in all the fields.');window.location = 'index.php';</script>";
       // header("location: ../login/index.php");
        exit();
    }
    else if(strpos($fullUrl, "error=username") == true)
    {
        echo "<script>alert('You introduced an invalid username.');window.location = 'index.php';</script>";
        exit();
    }
    else if(strpos($fullUrl, "error=email") == true)
    {
        echo "<script>alert('The email address is not valid.');window.location = 'index.php';</script>";
        exit();
    }
    else if(strpos($fullUrl, "error=password") == true)
    {
        echo "<script>alert('The password does not match.');window.location = 'index.php';</script>";
        exit();
    }
    else if(strpos($fullUrl, "error=uidoremailtaken") == true)
    {
        echo "<script>alert('The email address or username is taken.');window.location = 'index.php';</script>";
        exit();
    }
    else if(strpos($fullUrl, "usernotfound") == true)
    {
        echo "<script>alert('The username or email address was not found.');window.location = 'index.php';</script>";
        exit();
    }
    else if(strpos($fullUrl, "wrongpass") == true)
    {
        echo "<script>alert('The password you introduced is wrong.');window.location = 'index.php';</script>";
        exit();
    }

?>