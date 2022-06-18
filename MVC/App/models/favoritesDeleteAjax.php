<?php

require_once "dataBase.php";
session_start();
$userID= $_SESSION['userid'];
$announceID = intval($_POST['id'],10);
$db=new DataBase();
try {
    $db->deleteFromFavorites($userID, $announceID);
} catch (Exception $e) {
    echo "Caught exception: ". $e->getMessage(). "\n";
}
$code="";
$resultFav = $db->customQuery("SELECT * FROM favorites WHERE userid=".$userID);
foreach ($resultFav as $value) {
    $resultAnn=$db->customQuery("SELECT id,county,property_type,price FROM announces WHERE id=".$value['houseid']);
    foreach($resultAnn as $res){
        $annID=$res['id'];
        $code=$code. "<tr>
                            <td>".$res['id']."</td>
                            <td>".$res['county']."</td>
                            <td>".$res['property_type']."</td>
                            <td class='price'>".$res['price']."</td>
                            <td><button type=\"button\" id=\"delete\" onclick=\"ajax_delete('.$annID.');\"> <i class=\"fa fa-trash\"></i></button></td>
                      </tr>";
    }
}
echo $code;