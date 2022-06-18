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
            echo "Anunt adaugat la favorite!";
        }
        else{
            echo "Anuntul este deja preferat <3";
        }
    }
    else {
        echo "Trebuie sa fiti autentificat!";
    }
?>