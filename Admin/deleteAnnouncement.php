<?php
include_once '../MVC/App/models/dataBase.php';
$db = new DataBase();
$annID=intval($_POST['annID'],10);
if($db->deleteAnnouncement($annID)){
    echo "<h3>Announcement deleted!</h3>";
}
else{
    echo "<h3>Failed to delete the announcement with ID: ".$annID."</h3>";
}

?>