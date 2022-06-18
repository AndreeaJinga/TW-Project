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
    private const messageInsert="INSERT INTO messages (fname, lname, phone, email, message) VALUES (:fname, :lname, :phone, :email, :message)";


    public $conn;
    private $userInsertStatement;
    private $checkUserStatement;
    public $getUserStatement;
    public $loginSelectStatement;
    private $houseInsertStatement;
    private $messageInsertStatement;

    public function __construct(){
        try{
            $this->conn = new PDO("mysql:host=" . self::host . ";dbname=" . self::db_name, self::username, self::password);
             //$this->createDatabase();
            $this->userInsertStatement=$this->conn->prepare(self::userInsert);
            $this->houseInsertStatement=$this->conn->prepare(self::houseInsert);
            $this->checkUserStatement=$this->conn->prepare(self::checkUser);
            $this->getUserStatement=$this->conn->prepare(self::getUser);
            $this->loginSelectStatement=$this->conn->prepare(self::loginSelect);
            $this->messageInsertStatement=$this->conn->prepare(self::messageInsert);
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

    public function customQuery($query){
        $select=$this->conn->prepare($query);
        $select->execute();
        return $select->fetchAll();
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
        return $this->getUserStatement->rowCount();
    }

    public function loginUserTable($username,$password){

        if(!$this->loginSelectStatement->execute(['username'=>$username,'email'=>$username,'password'=>$password])){
            throw new Exception("Error while checking the DB!");
        }
        return $this->getUserStatement->rowCount();
    }

    public function messageInsertTable($fname, $lname, $phone, $email, $message){

        if(!$this->messageInsertStatement->execute(['fname'=>$fname,'lname'=>$lname,'phone'=>$phone,'email'=>$email,'message'=>$message])){
            return false;
        }
        return true;
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

        $query4 = "CREATE TABLE `messages` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `fname` text NOT NULL,
            `lname` text NOT NULL,
            `phone` int(11) NOT NULL,
            `email` text NOT NULL,
            `message` text NOT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
      $query4Stmt = $this->conn->prepare($query4);
      if(!$query4Stmt->execute()){
          throw new Exception("Error while creating DB!");
      }

      $query5 = "CREATE TABLE `announces` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `title` text NOT NULL,
        `county` text NOT NULL,
        `price` int(11) NOT NULL,
        `description` text NOT NULL,
        `img_source` text NOT NULL,
        `property_type` text NOT NULL,
        `usable_area` int(11) DEFAULT NULL,
        `floor` text DEFAULT NULL,
        `state` text DEFAULT NULL,
        `built_area` int(11) DEFAULT NULL,
        `partitioning` text DEFAULT NULL,
        `orientation` text DEFAULT NULL,
        `construction_year` int(11) DEFAULT NULL,
        `elevator` text DEFAULT NULL,
        `characteristics` text DEFAULT NULL,
        `street_neighborhood` text DEFAULT NULL,
        `rooms` text DEFAULT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB AUTO_INCREMENT=426 DEFAULT CHARSET=utf8mb4";
  $query5Stmt = $this->conn->prepare($query4);
  if(!$query5Stmt->execute()){
      throw new Exception("Error while creating DB!");
  }
    }
}