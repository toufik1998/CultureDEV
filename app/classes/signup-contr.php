<?php
require_once('../../app/classes/signup.class.php');
    class Signupcontr extends Signup{
        protected $name;
        protected $user_name;
        protected $password;

        public function __construct($name, $user_name, $password){
            $this->name = $name;
            $this->user_name = $user_name;
            $this->password = $password;
        }

        public function signupUser(){
            if($this->emptyInput() == false){
                // echo error empty input
                header("Location: ../../public/test/signup.php");
                exit();
            }

            if($this->invalidName() == false){
                // echo error invalid user name
                header("Location: ../../public/test/signup.php");
                exit();
            }

            if($this->userMatch() == false){
                 // echo error  user name already taken
                 header("Location: ../../public/test/signup.php");
                 exit();
            }


            $this->setUser($this->name, $this->user_name, $this->password);
        }



        private function emptyInput(){
            $result;
            if(empty($this->name) || empty($this->user_name) || empty($this->password)){
                $result = false;
            }else{
                $result = true;
            }

            return $result;
        }

        private function invalidName(){
            $result;
            if(!preg_match("/^[a-z0-9_-]{3,15}$/", $this->name) 
                && !preg_match("/^[a-z0-9_-]{3,15}$/", $this->user_name)){
                $result = false;
            }else{
                $result = true;
            }

            return $result;
        }

        private function userMatch(){
            $result;
            if(!$this->checkUser($this->name, $this->user_name)){
                $result = false;
            }else{
                $result = true;
            }

            return $result;

        }
    }


?>