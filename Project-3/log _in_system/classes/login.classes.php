<?php

class Login extends Dbh {

    protected function getUser($uid ,$pwd ){

        $stmt = $this->connect()->perpare('SELECT  users_pwd FROM users WHERE users_uid = ? OR users_email =? ;');
        
        if(!$stmt-> excute(array($uid ,$pwd))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0){
            $stmt =null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd  = password_verify($pwd ,$pwdHashed[0]["users_pwd"]);

        if ($checkPwd == false){
            $stmt =null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        }
        elseif($checkPwd == true){
            $stmt = $this->connect()->perpare('SELECT *  FROM users
            WHERE users_uid = ? OR users_email =?  AND USERS_PWD = ? ;');

        if(!$stmt-> excute(array($uid ,$uid,$pwd))){
        $stmt = null;
        header("location: ../index.php?error=stmtfailed");
        exit();
}
        $user =$stmt->fetchAll(PDO::FETCH_ASSOC);
        session_start();
        }

        $stmt = null;
        $_SESSION["userid"] = $user[0]["users_id"];
        $_SESSION["useruid"] = $user[0]["users_uid"];

    }



}