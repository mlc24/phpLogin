<?php

class SignupContr{
    private $uid;
    private $pwd;
    private $pwdRep;
    private $email;

    public function __construct($uid, $pwd, $pwdRep, $email){
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRep = $pwdRep;
        $this->email = $email;
    }

    private function emptyInput() {
        $result;
        if(
            empty($this->uid) ||
            empty($this->pwd) ||
            empty($this->pwdRep) ||
            empty($this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
    return $result;
    }

private function invalidUid() {
    $result;
    if( !preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
        {
            $result = false;
        }
    else{
        $result = true;
    }
    return $result;
}
private function invalidEmail() {
    $result;
    if( !filter_var($this->email, FILTER_VALIDATE_EMAIL) )
        {
            $result = false;
        }
    else
    {
        $result = true;
    }
    return $result;
    }
    private function pwdMatch() {
        $result;
        if($this->pwd !== $this->pwdRep)
            {
                $result = false;
            }
        else
        {
            $result = true;
        }
        return $result;
        }
    
}