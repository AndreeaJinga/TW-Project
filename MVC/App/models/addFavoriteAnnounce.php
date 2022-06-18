<?php
    session_start();
    if(isset($_SESSION['userid']))
    {
        $userID = $_SESSION['userid'];
        $announceID = intval($_POST['announceID']);

        require_once 'dataBase.php';
        $db = new DataBase();
        $result = $db->customQuery("SELECT * FROM favorites WHERE userid=" . $userID . " AND houseid=" . $announceID);
        if(count($result) == 0) {
            $db->insertFavoriteTable($userID, $announceID);
            echo "This announce was added to your favorites list.";
            //exit();
        }
        else{
            echo "This announce is already in your favorites list.";
            //exit();
        }
    }
    else {
        echo "You need to be logged in to add this announce to your favorites list!";
        //exit();
    }
?>