<?php
 require_once('../../app/config/config.php');

    class Connnexion{
      protected function connect(){
        try {
            $username = "root";
            $password = "";
            // $dbh = new PDO('mysql:host=localhost;dbname=testing', $username, $password);
            $dbh = new PDO("mysql:host=localhost;dbname=myblog", "root", "");
  
            return $dbh;
        } catch (PDOException $error) {
            print "Error! ". $error->getMessage() ."<br/>";
            die();
        }
    }
      // private $host=DB_HOST;
      // private $name=DB_NAME;
      // private $user=DB_USER;
      // private $pass=DB_PASSWORD;
      // protected $dbs;
      // public function __construct()
      // {
      //   try{
      //     $this->dbs =new PDO('mysql:host='.$this->host.';dbname='.$this->name,$this->user,$this->pass);
      //   }catch(PDOException $e){
      //      echo "Connexion error ".$e->getMessage();
      //   }
      // }
    }
   

?>