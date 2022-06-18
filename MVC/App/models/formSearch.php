<?php
class FormSearch{
    function getResults($array){
        require_once "dataBase.php";
        $query=null;
        if(isset($_POST['submit-data'])) {
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
        if($query!=null){
            $db=new DataBase();
            return $db->customQuery("SELECT * FROM announces WHERE".$query);
        }
        return null;
    }
}
?>