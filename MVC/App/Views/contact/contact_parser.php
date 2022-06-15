<?php
require_once '../../models/dataBase.php'; 
    if(isset($_POST['n']) && isset($_POST['p']) && isset($_POST['e']) && isset($_POST['m']) && isset($_POST['t']))
    {
        //Grabbing data
        $n = $_POST['n'];
        $p = $_POST['p'];
        $e = $_POST['e'];
        $t = $_POST['t'];
        $m = $_POST['m'];
        $db = new DataBase();

        $verify = $db->messageInsertTable($p, $n, $t, $e, $m);

        if( $verify == true)
        {
           echo "succes";
        }
        else{
            echo "The server failed to send the message. Please try again later.";
        }

    }
 //echo "succes";
?>