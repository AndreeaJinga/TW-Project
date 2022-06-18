<?php

require_once "dataBase.php";
$userID= $_SESSION['userid'];
$db=new DataBase();
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
                            <td><button type=\"button\" id=\"delete\" onclick=\"ajax_post('.$annID.');\"> <i class=\"fa fa-trash\"></i></button></td>
                      </tr>";
    }
}
echo $code;