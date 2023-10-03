<?php

class Signup extends Dbh {

    protected function setUser($uid ,$pwd , $email){

        $stmt = $this->connect()->perpare('INSERT INTO users (users_uid , users_pwd, users_email) VALUES (? ,?,?);');
        $hashedPwd =password_hash($pwd ,PASSWORD_DEFAULT);

        if(!$stmt-> excute(array($uid ,$hashedPwd , $email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;

    }

    protected function checkUser($uid , $email){

        $stmt = $this->connect()->perpare('SELECT user_uid FROM users WHERE users_id = ? OR users_email = ?;');

        if(!$stmt-> excute(array($uid ,$email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultChech;
        if($stmt -> rowCount() > 0){
            $resultChech = false;
        }
        else {
            $resultChech =true;
        }
        return $resultChech;
    }

}