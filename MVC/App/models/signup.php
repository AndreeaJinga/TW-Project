<?php
require_once '../core/controller.php';
class Signup {

    private $contr;
    private $db;

    protected function databaseSetUp()
    {
        $this->contr = new Controller;
        $this->db = $this->contr->model('DataBase');
    }

    protected function setUser($uid, $pwd, $email)
    {        
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        $this->db->insertIntoUsers($uid, $email, $hashedPwd);
    }

    protected function checkUser($uid, $email)
    {
        $rows = $this->db->checkUserTable($uid, $email);
        $rowsAdmin = $this->db->checkUserTable('admin', 'real.estateproj@yahoo.com');
         $resultCheck;
         if($rows > 0 || $rowsAdmin > 0)
         {
             $resultCheck = false;    
         }
         else{
            $resultCheck = true;
        }

        return $resultCheck;
    }

}
?>