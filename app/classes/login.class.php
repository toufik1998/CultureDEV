<?php
require_once('../../app/modal/modal.php');


class Login extends Connnexion{

    protected function getUser($userName, $password){
        $stmt = $this->connect()->prepare(
            'SELECT * FROM user WHERE username = ? '
        );
        $stmt->execute(array($userName));
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($password, $pwdHashed[0]["password"]);
        // var_dump($pwdHashed);
        $stmt = $this->connect()->prepare(
            'SELECT * FROM user WHERE username = ? AND password= ? '
        );
        if(!$stmt->execute(array($userName, $pwdHashed[0]["password"]))){
            $stmt = null;
            header('location:../../public/test/signin.php');

            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            // header('location:../../public/home.php');
            
                header('location:../../public/test/signin.php');
                $_SESSION['usernotfound'] = 'Sorry! user not found';
    
            

            exit();
        }


        if($checkPwd == false){
            // header('Location: ../index.php?wrongpassword');
            $_SESSION['wrongpassword'] = 'you entered an invalid information';
            header('location:../../public/test/signin.php');
            $stmt = null;
            // exit();
        }else if($checkPwd == true){

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // session_start();
            $_SESSION["userid"] = $user[0]["id"];
            $_SESSION['userlogin'] = 'hello';
             echo $_SESSION['userid']; 


            
            $stmt = null;
            header('location:../../home.php');

        }    }

}
?>