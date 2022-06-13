<?php
class DataBase{
    private const username="root";
    private const password="";
    private const host="localhost";
    private const db_name = "twproject";
    private const userInsert="INSERT INTO users (username, email, password) VALUES (:username,:email,:password)";
    private const houseInsert="INSERT INTO houses (title, price, country,city) VALUES (:title,:price,:country,:city)";

    private $conn;
    private $userInsertStatement;
    private $houseInsertStatement;

    public function __construct(){
        try{
            $this->conn = new PDO("mysql:host=" . self::host . ";dbname=" . self::db_name, self::username, self::password);
            //echo "data base const";
            $this->userInsertStatement=$this->conn->prepare(self::userInsert);
            $this->houseInsertStatement=$this->conn->prepare(self::houseInsert);
        }
        catch(PDOException $e){
            echo "Error while connecting to DB!".$e;
        }
        /*echo "data base const";
        $this->conn = new PDO("mysql:host=" . self::host . ";dbname=" . self::db_name, self::username, self::password);
        if ($this->conn->connect_error){
            throw new Exception("Error while connecting to DB!");
        }
        echo "data base const";
        $this->userInsertStatement=$this->conn->prepare(self::userInsert);
        $this->houseInsertStatement=$this->conn->prepare(self::houseInsert);*/
    }

    public function __destruct()
    {
        $this->conn=null;
    }

    public function insertIntoUsers($username,$email,$password){

        if(!$this->userInsertStatement->execute(['username'=>$username,'email'=>$email,'password'=>$password])){
            throw new Exception("Error while inserting into DB!");
        }
    }

    public function insertIntoHouses($title,$price,$country,$city){

        if(!$this->houseInsertStatement->execute(array($title,$price,$country,$city))){
            throw new Exception("Error while inserting into DB!");
        }
    }
}