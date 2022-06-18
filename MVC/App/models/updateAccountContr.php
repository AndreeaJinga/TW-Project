<?php

class UpdateAccountContr extends UpdateAccount{
    
    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;
    private $currpwd;
    private $curruid;

    public function __construct($uid, $pwd, $pwdrepeat, $email, $currpwd, $curruid) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
        $this->currpwd = $currpwd;
        $this->curruid = $curruid;
    }

    public function updateUser() {
        $this->databaseSetUp();
        if($this->emptyInput() == false)
        {
            header("location: ../Views/account/index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false)
        {
            header("location: ../Views/account/index.php?error=username");
            exit();
        }
        if($this->invalidEmail() == false)
        {
            header("location: ../Views/account/index.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false)
        {
             header("location: ../Views/account/index.php?error=password");
             exit();
        }
        if($this->uidTakenCheck() == false)
        {
             header("location: ../Views/account/index.php?error=uidoremailtaken");
             exit();
        }
        $this->updateUserAccount($this->uid, $this->email, $this->pwd, $this->currpwd, $this->curruid);
    
    }

    private function emptyInput(){
        $result;

        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email))
            $result = false;
        else
            $result = true;
        return $result;
    }

    private function invalidUid(){
        $result;

        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
            $result = false;
        else    
            $result = true;
        return $result;
    }

    private function invalidEmail(){
        $result;

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
            $result = false;
        else    
            $result = true;
        return $result;
    }

    private function pwdMatch(){
        $result;

        if($this->pwd !== $this->pwdrepeat)
            $result = false;
        else    
            $result = true;
        return $result;
    }

    private function uidTakenCheck(){
        $result;

        if(!$this->checkUser($this->uid, $this->email))
            $result = false;
        else    
            $result = true;
        return $result;
    }

}

?>