<?php

    session_start();

    if(isset($_SESSION['userid']))
    {
        include "../models/dataBase.php";
        include "../models/updateAccount.php";

        $delete = new UpdateAccount();
        $delete->databaseSetUp();
        $delete->deleteAccount($_SESSION['userid']);

        session_unset();
        session_destroy();

        //Going back to front page
        header("location: ../Views/login/index.php");
    }
?>