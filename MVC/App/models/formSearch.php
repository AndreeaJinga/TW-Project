<?php
class FormSearch{
    function countyResults($inputCounty){
        require_once "dataBase.php";
        $query="'".$inputCounty."'";
        $db=new DataBase();
        return $db->customQuery("SELECT * FROM announces WHERE county=".$query);
    }
    function getResults(){
        require_once "dataBase.php";
        //var_dump($_POST);
        $query=null;
        if(isset($_POST['submit-data2'])){
            //echo "<h1> FROM HOME</h1>";
            if($_POST['property_type']!=null) {
                $query = $query . " property_type = '" . $_POST['property_type']."'";
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
        }
        else if(isset($_POST['submit-data'])) {
            //echo "<h1> FROM ANN</h1>";
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
        }
        //echo "acolo";
        $result=array();
        if($query!=null){
            $db=new DataBase();
            /*echo "aici";
            var_dump($query);*/
            $result=$db->customQuery("SELECT * FROM announces WHERE".$query);
            //var_dump( $result);
            return $result;
        }
        return $result;
    }
}
?>