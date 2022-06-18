<?php


    if(isset($_POST["submit"]))
    {
        //Grabbing data
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $pwdrepeat = $_POST["pwdrepeat"];
        $email = $_POST["email"];
        $currpwd = $_POST["currentPwd"];
        $curruid = $_POST["currentUid"];

        //Instatiate SignupContr class
        include "../models/dataBase.php";
        include "../models/updateAccount.php"
        include "../models/updateAccountContr.php";
       
        // $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);
        
        //Running error handlers and user signup
        // $signup->signupUser();

        //Going back to front page
        header("location: ../Views/login/index.php?error=none");
    }

?>