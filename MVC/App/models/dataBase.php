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
    private const updateInfo="UPDATE users SET username = :newUsername, email = :newEmail, password = :newPassword WHERE username = :username";
    private const deleteAccount="DELETE FROM users WHERE id = :id";
    private const selectAnnounce="SELECT * FROM announces LIMIT 15";
    private const favoritesInsert="INSERT INTO favorites (userid, houseid) VALUES (:userid,:houseid)";
    private const deleteFavorite="DELETE FROM favorites WHERE userid = :userid AND houseid=:houseid";
    private const deleteUserFav="DELETE FROM favorites WHERE userid = :userid";

    public $conn;
    private $userInsertStatement;
    private $checkUserStatement;
    public $getUserStatement;
    public $loginSelectStatement;
    private $houseInsertStatement;
    private $messageInsertStatement;
    private $updateInfoStatement;
    private $deleteAccountStatement;
    private $selectAnnounceStatement;
    private $insertFavoriteStatement;
    private $deleteFavoriteStatement;
    private $deleteUserFavStatement;

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
            $this->updateInfoStatement=$this->conn->prepare(self::updateInfo);
            $this->deleteAccountStatement=$this->conn->prepare(self::deleteAccount);
            $this->selectAnnounceStatement=$this->conn->prepare(self::selectAnnounce);
            $this->insertFavoriteStatement=$this->conn->prepare(self::favoritesInsert);
            $this->deleteFavoriteStatement=$this->conn->prepare(self::deleteFavorite);
            $this->deleteUserFavStatement=$this->conn->prepare(self::deleteUserFav);
        }
        catch(PDOException $e){
            throw $e;
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
        $result=$select->fetchAll();
        //echo "result is:\n";
        //var_dump( $result);
        return $result;
    }

    public function deleteUserFavorites($userid){
        if(!$this->deleteUserFavStatement->execute(['userid'=>$userid])){
            throw new Exception("Error while deleting into favorites!");
        }
    }

    public function deleteFromFavorites($userid,$houseid){
        if(!$this->deleteFavoriteStatement->execute(['userid'=>$userid,'houseid'=>$houseid])){
            throw new Exception("Error while deleting into favorites!");
        }
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

    public function updateUserTable($newUsername, $newEmail, $newPassword, $username){

        if(!$this->updateInfoStatement->execute(['newUsername'=>$newUsername,'newEmail'=>$newEmail,'newPassword'=>$newPassword,'username'=>$username])){
            return false;
        }
        return true;
    }

    public function deleteUser($id){

        if(!$this->deleteAccountStatement->execute(['id'=>$id])){
            return false;
        }
        return true;
    }

    public function selectAnnounceTable(){
        if(!$this->selectAnnounceStatement->execute()){
            throw new Exception("Error while selecting from DB!");
        }
        //var_dump($this->selectAnnounceStatement->fetchAll());
        return $this->selectAnnounceStatement->fetchAll();
    }

    public function insertFavoriteTable($userid,$houseid){
        if(!$this->insertFavoriteStatement->execute(['userid'=>$userid,'houseid'=>$houseid])){
            throw new Exception("Error while inserting into DB!");
        }
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