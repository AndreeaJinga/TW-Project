<?php

class Signup extends DataBase {

    protected function setUser($uid, $pwd, $email)
    {
        $stmt = $this->conn->prepare('INSERT INTO users (username, email, password) VALUES (?,?,?);');
        
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


        if($stmt->execute(array($uid, $email, $hashedPwd)))
        {
            $stmt = null;
            header("location: ../Views/login/index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($uid, $email)
    {
        $stmt = $this->conn->prepare('SELECT username FROM users WHERE username = ? OR email = ?;');
        
        if($stmt->execute(array($uid, $email)))
        {
            $stmt = null;
            header("location: ../Views/login/index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0)
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