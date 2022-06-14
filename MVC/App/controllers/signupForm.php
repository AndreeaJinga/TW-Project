<?php

    if(isset($_POST["submit"]))
    {
        //Grabbing data
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $pwdrepeat = $_POST["pwdrepeat"];
        $email = $_POST["email"];

        var_dump($uid);

        //Instatiate SignupContr class
        include "../models/dataBase.php";
        include "../models/signup.php";
        include "../models/signupContr.php";

        // $db = $contr->model('DataBase');
        // $contr = new Controller;
       //$db= new DataBase;
        // $db = $contr->model('DataBase');
        $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);

        //Running error handlers and user signup
        $signup->signupUser();

        //Going back to front page
        header("location: ../Views/login/index.php?error=none");
    }

?>