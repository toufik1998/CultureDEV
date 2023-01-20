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
            $_SESSION['somethingwrong'] = 'Sorry you entered an invalid information';

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
            $stmt = null;
            // header('Location: ../index.php?wrongpassword');
            header('location:../../public/test/signin.php');
            $_SESSION['wrongpassword'] = 'wrong password';
            exit();
        }elseif($checkPwd == true){

            // if(!$stmt->execute(array($userName, $pwdHashed[0]["password"]))){
            //     $stmt = null;
            //     header('location:../../public/test/signin.php');
            //     $_SESSION['somethingwrong'] = 'Something wrong please repeat your entered information';
            //     exit();
            // }
    
            // if($stmt->rowCount() == 0){
            //     $stmt = null;
            //     // header('Location: ../index.php?usernotfound');
            //     $_SESSION['usernotfound'] = 'Sorry! user not found';
            //     exit();
            // }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["userid"] = $user[0]["id"];
            $_SESSION['userlogin'] = 'hello';
             echo $_SESSION['userid']; 


            
            $stmt = null;
            header('location:../../home.php');

        }    }

}
?>