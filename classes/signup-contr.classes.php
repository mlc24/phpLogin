<?php

class SignupContr extends Signup {
    
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

    public function signupUser(){
        //echo "invalid input";
        if($this->emptyInput() == false){
            header("location: ../index.php?error=emptyInput");
            exit();
        }
        //echo "invalid username";
        if($this->invalidUid() == false){
            header("location: ../index.php?error=username");
            exit();
        }
        //echo "invalid email";
        if($this->invalidEmail() == false){
            header("location: ../index.php?error=email");
            exit();
        }
        //echo "Username or email taken";
        if($this->uidTakenCheck() == false){
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }
        $this->setUser($this->$uid,$this->$pwd, $this->$email);
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
        

    private function uidTakenCheck() {
        $result;
        if(!$this->checkUser($this->uid, $this->email))
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