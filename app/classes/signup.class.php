<?php
require_once('../../app/modal/modal.php');

class Signup extends Connnexion{
    public function __construct()
    {
     parent :: __construct();
    }
    protected function setUser($name, $userName, $password){
        $stmt = $this->connect()->prepare(
            'INSERT INTO user (user, username, password) VALUES (?,?,?);'
        );

        // $hash_password = password_hash($password, PASSWORD_DEFAULT);
        if(!$stmt->execute(array($name, $userName, $password))){
            $stmt = null;
            header("Location: ../index.php");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($user, $userName){
        $stmt = $this->connect()->prepare(
            'SELECT * FROM user WHERE user= ? OR username= ?;'
        );

        if(!$stmt->execute(array($user, $userName))){
            $stmt = null;
            header("Location: ../index.php");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true; 
        }

        return $resultCheck;
    }

}
?>