<?php
include_once '../MVC/App/models/dataBase.php';
$db = new DataBase();
$userID=intval($_POST['userID'],10);
if(count($db->customQuery("SELECT * FROM users WHERE id=".$userID))!=0 && $db->deleteUser($userID)){
    echo "<h3>User deleted!</h3>";
}
else{
    echo "<h3>Failed to delete the user with ID: ".$userID."</h3>";
}

?>