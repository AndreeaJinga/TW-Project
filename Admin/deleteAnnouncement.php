<?php
include_once '../MVC/App/models/dataBase.php';
$db = new DataBase();
$annID=intval($_POST['annID'],10);
if($db->deleteAnnouncement($annID)){
    echo "<<div class='resultText'>Announcement deleted!</div>";
}
else{
    echo "<div class='resultText'>Failed to delete the announcement with ID: ".$annID."</div>";
}

?>