<?php


    if(isset($_POST["submit"]))
    {
        //Grabbing data
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];

        //Instatiate SignupContr class
        include "../models/dataBase.php";
        include "../models/login.php";
        include "../models/loginContr.php";
        
        $login = new LoginContr($uid, $pwd);
        
        //Running error handlers and user signup
        $login->loginUser();

        //Going back to front page
        header("location: ../Views/login/index.php?error=none");
    }

?>