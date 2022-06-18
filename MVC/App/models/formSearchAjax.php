<?php
        require_once "dataBase.php";
        //var_dump($_POST);
        $query=null;
        if ($_POST['property_type'] != null) {
            $query = $query . " property_type = '" . $_POST['property_type']."'";
        }
        if ($_POST['county'] != null) {
            if ($query != null) {
                $query = $query . " AND";
            }
            $query = $query . " county = '" . $_POST['county']."'";
        }
        if ($_POST['minPrice'] != null) {
            if ($query != null) {
                $query = $query . " AND";
            }
            $query = $query . " price >= " . $_POST['minPrice'];
        }
        if ($_POST['maxPrice'] != null) {
            if ($query != null) {
                $query = $query . " AND";
            }
            $query = $query . " price <= " . $_POST['maxPrice'];
        }
        if ($_POST['usableArea'] != null) {
            if ($query != null) {
                $query = $query . " AND";
            }
            $query = $query . " usable_area = " . $_POST['usableArea'];
        }
        if ($_POST['partitioning'] != null) {
            if ($query != null) {
                $query = $query . " AND";
            }
            $query = $query . " partitioning = '" . $_POST['partitioning']."'";
        }
        $result=array();
        if($query!=null){
            $db=new DataBase();
            $result=$db->customQuery("SELECT * FROM announces WHERE".$query);
        }
        $code="";
        foreach ($result as &$value) {
            $code=$code. "<div class='card'>
                            <div class=\"imgBx\">
                                <img src='".$value['img_source']."' alt='img_announce'>
                            </div>
                            <div class=\"content\">
                                <h2>" . $value['property_type'] . "</h2>
                            <p>Price: " . $value['price'] . "</p>
                            <p>Usable Area: " . $value['usable_area'] . "</p>
                            <p>Country: " . $value['county'] . "</p>
                            <a href='../home/detailedAnnounce.php?id=".$value['id']."'> Detailes</a>
                            </div>
                         </div>";
        }
        if($code==""){
            echo "<div class=\"notConnected\">
                    <h3 class=\"headerNotConnected\"> No result were found! </h3>
                </div>";
        }
        else {
            echo $code;
        }
?>