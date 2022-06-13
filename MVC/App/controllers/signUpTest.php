<?php

require_once("../core/controller.php");
/*
class signUpTest extends Controller{

    public function test($_POST){*/
        if(isset($_POST["submit"])){
            $user=$_POST["user"];
            $pass=$_POST["pass"];
            $passrep=$_POST["passrep"];
            $email=$_POST["email"];
            var_dump($user);
    
            try{
                $contr = new Controller();
                
                $db = $contr->model('dataBase');
                echo "merge";
                $db->insertIntoUsers($user,$pass,$passrep,$email);
                
                header("location: ../views/home/index.php");
            }
            catch (Exception $ex) {
                http_response_code(500);
                header("Content-type: text/plain");
                echo "DB error";
            }
        }/*
    }

}*/