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

        // var_dump($uid);
        // var_dump($pwd);
        // var_dump($pwdrepeat);
        // var_dump($email);
        // var_dump($currpwd);
        // var_dump($curruid);

        //Instatiate SignupContr class
        include "../models/dataBase.php";
        include "../models/updateAccount.php";
        include "../models/updateAccountContr.php";
       
        $update = new UpdateAccountContr($uid, $pwd, $pwdrepeat, $email, $currpwd, $curruid);
        
        //Running error handlers and user signup
        $update->updateUser();

        //Going back to front page
        header("location: ../Views/account/index.php?error=none");
    }

?>