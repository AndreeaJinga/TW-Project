<?php

    if(isset($_POST["submit"]))
    {
        //Grabbing data
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $pwdrepeat = $_POST["pwdrepeat"];
        $email = $_POST["email"];

        //Instatiate SignupContr class
        include "../models/signup.php";
        include "../models/signupContr.php";
        include "../models/dataBase.php";

        $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);


        //Running error handlers and user signup

        //Going back to front page
    }

?>