<?php
class DataBase{
    private const username="root";
    private const password="";
    private const host="localhost";
    private const db_name = "twproject";
    private const userInsert="INSERT INTO users (username, email, password) VALUES (:username,:email,:password)";
    private const houseInsert="INSERT INTO houses (title, price, country,city) VALUES (:title,:price,:country,:city)";
    private const checkUser="SELECT username FROM users WHERE username = :username OR email = :email";
    private const getUser="SELECT password FROM users WHERE username = :username OR email = :email";
    private const loginSelect="SELECT * FROM users WHERE username = :username OR email = :email AND password = :password";
    
    public $conn;
    private $userInsertStatement;
    private $checkUserStatement;
    public $getUserStatement;
    public $loginSelectStatement;
    private $houseInsertStatement;

    public function __construct(){
        try{
            $this->conn = new PDO("mysql:host=" . self::host . ";dbname=" . self::db_name, self::username, self::password);
            // $this->createDatabase();
            $this->userInsertStatement=$this->conn->prepare(self::userInsert);
            $this->houseInsertStatement=$this->conn->prepare(self::houseInsert);
            $this->checkUserStatement=$this->conn->prepare(self::checkUser);
            $this->getUserStatement=$this->conn->prepare(self::getUser);
            $this->loginSelectStatement=$this->conn->prepare(self::loginSelect);
        }
        catch(PDOException $e){
            echo "Error while connecting to DB!".$e;
        }
        catch (Exception $e) {
        }
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

    public function checkUserTable($username,$email){

        if(!$this->checkUserStatement->execute(['username'=>$username,'email'=>$email])){
            throw new Exception("Error while checking the DB!");
        }
        return $this->checkUserStatement->rowCount();
    }

    public function insertIntoHouses($title,$price,$country,$city){

        if(!$this->houseInsertStatement->execute(array($title,$price,$country,$city))){
            throw new Exception("Error while inserting into DB!");
        }
    }

    public function getUserTable($username,$password){

        if(!$this->getUserStatement->execute(['username'=>$username,'email'=>$username])){
            throw new Exception("Error while checking the DB!");
        }
        return $this->checkUserStatement->rowCount();
    }

    public function loginUserTable($username,$password){

        if(!$this->loginSelectStatement->execute(['username'=>$username,'email'=>$username,'password'=>$password])){
            throw new Exception("Error while checking the DB!");
        }
        return $this->loginSelectStatement->rowCount();
    }

    public function createDatabase() {
        $query1 = "CREATE TABLE `users` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `username` text NOT NULL,
            `email` text NOT NULL,
            `password` text NOT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        $query1Stmt = $this->conn->prepare($query1);
        if(!$query1Stmt->execute()){
            throw new Exception("Error while creating DB!");
        }
        
        $query2 = "CREATE TABLE `houses` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `title` text NOT NULL,
            `price` int(11) NOT NULL,
            `country` text NOT NULL,
            `city` text NOT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        $query2Stmt = $this->conn->prepare($query2);
        if(!$query2Stmt->execute()){
            throw new Exception("Error while creating DB!");
        }

        $query3 = "CREATE TABLE `favorites` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `userid` int(11) NOT NULL,
              `houseid` int(11) NOT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        $query3Stmt = $this->conn->prepare($query3);
        if(!$query3Stmt->execute()){
            throw new Exception("Error while creating DB!");
        }
    }
}