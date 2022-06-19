<?php
include_once '../MVC/App/models/dataBase.php';
$db = new DataBase();
$userID=intval($_POST['userID'],10);
if(count($db->customQuery("SELECT * FROM users WHERE id=".$userID))!=0 && $db->deleteUser($userID)){
    echo "<div class='resultText'>User deleted!</div>";
}
else{
    echo "<div class='resultText'>Failed to delete the user with ID: ".$userID."</div>";
}

?>