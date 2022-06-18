<?php
require_once '../core/controller.php';
class UpdateAccount {

    private $contr;
    private $db;

    protected function databaseSetUp()
    {
        $this->contr = new Controller;
        $this->db = $this->contr->model('DataBase');
    }

    protected function updateUserAccount($newUsername, $newEmail, $newPassword, $password, $username)
    {        
        $this->db->updateUserTable($newUsername, $newEmail, $newPassword, $password, $username);
    }

    protected function checkUser($uid, $email)
    {
        $rows = $this->db->checkUserTable($uid, $email);

         $resultCheck;
         if($rows > 0)
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