<?php
require_once('../../app/modal/modal.php');

class Alltraitment extends Connnexion{

   public function __construct()
   {
    parent :: __construct();
   }
   public function getSpecifikData($query,$params=[]){
        $statment=$this->dbs->prepare($query);
        $statment->execute($params);
        return $statment->fetchAll(PDO::FETCH_ASSOC);
   }
   public function getData($query, $params=[]){
        $statment=$this->dbs->prepare($query);
        $statment->execute($params);
        return $statment->fetchAll(PDO::FETCH_ASSOC);
   }
//    public function getNumberRows($query,$params=[]){
//     $statment=$this->dbs->prepare($query);
//     $statment->execute($params);
//     return $statment->rowCount();
//    }
   public function insertData($query,$params=[]){
    $statment=$this->dbs->prepare($query);
    $statment->execute($params);
    
   }
   public function updatetData($query,$params=[]){
    $statment=$this->dbs->prepare($query);
    $statment->execute($params);
   }
   public function deleteData($query,$params=[]){
    $statment=$this->dbs->prepare($query);
    $statment->execute($params);
   }
}
// don't forget to instanciate the class






?>