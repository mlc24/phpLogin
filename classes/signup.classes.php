<?php

class Signup extends Dbh{

    protected function checkUser($uid, $email){
        $stmt = $this->connect()->prepare('SELECT users-uid FROM users WHERE users_uid = ? OR users_email = ?;');

        if(!$stmt->execute(array($uid, $email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
    }
}