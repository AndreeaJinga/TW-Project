<?php
class DataBase{
    private const username="root";
    private const password="";
    private const host="localhost";
    private const db_name = "twproject";
    private const userInsert="INSERT INTO users (username, email, password) VALUES(?,?,?)";
    private const houseInsert="INSERT INTO houses (title, price, country,city) VALUES(?,?,?,?)";

    private $conn;
    private $userInsertStatement;
    private $houseInsertStatement;

    public function __construct(){
        $this->conn = new PDO("mysqli:host=" . self::host . ";dbname=" . self::db_name, self::username, self::password);
        if ($this->conn->connect_error){
            throw new Exception("Error while connecting to DB!");
        }
        $this->userInsertStatement=$this->conn->prepare(self::userInsert);
        $this->houseInsertStatement=$this->conn->prepare(self::houseInsert);
    }

    public function __destruct()
    {
        $this->conn->close();
    }

    public function insertIntoUsers($username,$email,$password){

        if(!$userInsertStatement->execute(array($username,$email,$password))){
            throw new Exception("Error while inserting into DB!");
        }
    }

    public function insertIntoHouses($title,$price,$country,$city){

        if(!$houseInsertStatement->execute(array($title,$price,$country,$city))){
            throw new Exception("Error while inserting into DB!");
        }
    }


}