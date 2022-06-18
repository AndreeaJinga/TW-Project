<?php
require_once '../core/controller.php';
class UpdateAccount {

    private $contr;
    private $db;

    public function databaseSetUp()
    {
        $this->contr = new Controller;
        $this->db = $this->contr->model('DataBase');
    }

    protected function updateUserAccount($newUsername, $newEmail, $newPassword, $password, $username)
    {  
        $rows = $this->db->getUserTable($username, $password);

        $resultCheck;
        if($rows == 0)
        {
            $resultCheck = false; 
            header("location: ../Views/account/index.php?usernotfound");  
            exit();
        }
        else{
            $pwdHashed =  $this->db->getUserStatement->fetchAll(PDO::FETCH_ASSOC);
            $checkPass = password_verify($password, $pwdHashed[0]["password"]);

            if($checkPass == false)
            {
                $resultCheck = false;
                header("location: ../Views/account/index.php?wrongpass");  
                exit();
            }

            else if($checkPass == true)
            {
                $hashedPwd = password_hash($newPassword, PASSWORD_DEFAULT);
                $this->db->updateUserTable($newUsername, $newEmail, $hashedPwd, $username);
            }  
        } 
        
        
        
    }

    public function deleteAccount($id)
    {
        $this->db->deleteUser($id);
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