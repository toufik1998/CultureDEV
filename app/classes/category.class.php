<?php
require_once('../../app/modal/modal.php');

class Alltraitment2 extends Connnexion{

   
   public function getSpecifikData($query,$params=[]){
        $statment=$this->connect()->prepare($query);
        $statment->execute($params);
        return $statment->fetchAll(PDO::FETCH_ASSOC);
   }

   public function getData($query, $params=[]){
        $statment=$this->connect()->prepare($query);
        $statment->execute($params);
        return $statment->fetchAll(PDO::FETCH_ASSOC);
   }

   public function insertData($query,$params=[]){
    $statment=$this->connect()->prepare($query);
    $statment->execute($params);
    
   }

   public function updatetData($query,$params=[]){
    $statment=$this->connect()->prepare($query);
    $statment->execute($params);
   }

   public function deleteData($query,$params=[]){
    $statment=$this->connect()->prepare($query);
    $statment->execute($params);
   }
}
// don't forget to instanciate the class

?>