<?php


    if(isset($_POST["submit"]))
    {
        //Grabbing data
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $pwdrepeat = $_POST["pwdrepeat"];
        $email = $_POST["email"];
        $currpwd = $_POST["currentPwd"];

        //Instatiate SignupContr class
        include "../models/dataBase.php";
        //include "../models/signup.php"
        // include "../models/signup.php";
        // include "../models/signupContr.php";
       
        // $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);
        
        //Running error handlers and user signup
        // $signup->signupUser();

        //Going back to front page
        header("location: ../Views/login/index.php?error=none");
    }

?>