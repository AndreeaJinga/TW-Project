<?php


    if(isset($_POST["submit"]))
    {
        //Grabbing data
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];

        // var_dump($uid);
        // var_dump($pwd);

        //Instatiate SignupContr class
        include "../models/dataBase.php";
        include "../models/login.php";
        include "../models/loginContr.php";
        
        $login = new LoginContr($uid, $pwd);
        
        //Running error handlers and user signup
        $login->loginUser();

        // echo "LOGIN3";
        // var_dump($uid);
        // var_dump($pwd);

        //Going back to front page
        header("location: ../Views/login/index.php?error=none");
    }

?>