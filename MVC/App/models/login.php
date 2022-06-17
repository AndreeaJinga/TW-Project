<?php
require_once '../core/Controller.php';
class Login {

    private $contr;
    private $db;

    protected function databaseSetUp()
    {
        $this->contr = new Controller;
        $this->db = $this->contr->model('DataBase');
    }

    protected function getUser($uid, $pwd)
    {
        $rows = $this->db->getUserTable($uid, $pwd);

        $resultCheck;
        if($rows == 0)
        {
            $resultCheck = false; 
            // header("location: ../Views/login/index.php?usernotfound");
            header("location: login?usernotfound");   
            exit();
        }
        else{
            $pwdHashed =  $this->db->getUserStatement->fetchAll(PDO::FETCH_ASSOC);
            $checkPass = password_verify($pwd, $pwdHashed[0]["password"]);

            if($checkPass == false)
            {
                $resultCheck = false; 
                // header("location: ../Views/login/index.php?wrongpass");
                header("location: login?wrongpass");  
                exit();
            }

            else if($checkPass == true)
            {
                $rows2 = $this->db->loginUserTable($uid, $pwd);

                if($rows2 == 0)
                {
                    $resultCheck = false;
                    // header("location: ../Views/login/index.php?usernotfound2");
                    header("location: login?usernotfound2");   
                    exit();
                }

                $user = $this->db->loginSelectStatement->fetchAll(PDO::FETCH_ASSOC);

                session_start();
                $_SESSION['userid'] = $user[0]['id'];
                $_SESSION['useruid'] = $user[0]['uid'];
            }
        }  
    }
}
?>