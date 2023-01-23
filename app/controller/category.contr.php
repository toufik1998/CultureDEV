<?php
require_once('../../app/classes/category.class.php');

//  {addJock();}
$myada=new Alltraitment2();
 if(isset($_POST["add-category"])){
    $category_name=$_POST["category_name"];
    
    $myada->insertData('INSERT INTO category(category_name) VALUES(?)',array($category_name));
}

 if(isset($_POST["delete-category"])){
    $delete_id=$_POST["deletecategory-id"];
    $myada->deleteData('DELETE FROM category WHERE id=?',array($delete_id));

 }

 if(isset($_POST["show-category"])){
   $search=$_POST["search-category"];
   $category_rows=$myada->getSpecifikData("SELECT * FROM category WHERE category_name LIKE ? ",array("%".$_POST["search-category"]."%"));
 }else{
   $category_rows=$myada->getData("SELECT * FROM category");
 }

 if(isset($_POST["update-category"])){
   $id=$_POST['update-id'];
   $category_name=$_POST["category_name"];

   
   try{   
      $myada->updatetData("UPDATE category set category_name=? where id= ?",array($category_name,$id));
      header('location:dashboard2.php');
   }catch(exception $e){
      echo "error ".$e->getMessage();
   }


}

if(isset($_POST['openCategory'])){
   $current_category = $_POST['openCategory'];
   $category_result = $myada->getData("SELECT * FROM category WHERE id=?", array($current_category));
   echo json_encode($category_result);
}
?>