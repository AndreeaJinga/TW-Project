<?php
class CountrySearch{
    function getResults($var){
        require_once "dataBase.php";
        $result1=array();
        $db = new DataBase();
        $county=$db->conn->prepare("SELECT * FROM announces WHERE county = :county");
        $county->execute(['county'=>$var]);
        return $county->fetchAll();
    }
}