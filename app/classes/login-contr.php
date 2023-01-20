<?php
require_once('../../app/classes/login.class.php');

    class Logincontr extends Login{
        protected $user_name;
        protected $password;

        public function __construct($user_name, $password){
            $this->user_name = $user_name;
            $this->password = $password;
        }

        public function loginUser(){
            if($this->emptyInput() == false){
                // echo error empty input
                header('location:../../public/test/signin.php');
                exit();
            }

            if($this->invalidName() == false){
                // echo error invalid user name
                header('location:../../public/test/signin.php');
                exit();
            }

            

            $this->getUser($this->user_name,$this->password);
        }



        private function emptyInput(){
            $result;
            if(empty($this->user_name) || empty($this->password)){
                $result = false;
            }else{
                $result = true;
            }

            return $result;
        }

        private function invalidName(){
            $result;
            if(!preg_match("/^[a-z0-9_-]{3,15}$/", $this->user_name)){
                $result = false;
            }else{
                $result = true;
            }

            return $result;
        }

        
    }


?>