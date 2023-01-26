<?php
require_once('../../app/classes/post.class.php');

$myada=new Alltraitment();
 if(isset($_POST["add"])){
    $post_title=$_POST["post-title"];
    $category=$_POST["category-options"];
    $post_content = $_POST["post-content"];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../../images/" . $filename;
    $myada->insertData('INSERT INTO posts(category,title,content,image) VALUES(?,?,?,?)',array($category,$post_title,$post_content,$filename));
    move_uploaded_file($tempname, $folder);
}

if(isset($_POST["add-multiple-post"])){
   
   $post_title=$_POST["post-title"];
    $category=$_POST["category-options"];
    $post_content = $_POST["post-content"];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../../images/" . $filename;
   foreach($post_title as $index=>$post_titles){
      $myada->insertData('INSERT INTO posts(category,title,content,image) VALUES(?,?,?,?)',array($category[$index],$post_titles,$post_content[$index],$filename[$index]));
      move_uploaded_file($tempname[$index], "../../images/" . $filename[$index]);
      header('Location: ../../public/test/posts.php');
      
   }
}

if(isset($_POST["delete"])){
    $id=$_POST["delete-id"];
    $myada->deleteData('DELETE FROM posts WHERE id=?',array($id));

}

if(isset($_POST["show"])){
   $search=$_POST["search"];
   $rows=$myada->getSpecifikData("SELECT * FROM posts WHERE title LIKE ? ",array("%".$_POST["search"]."%"));
}else{
   $rows=$myada->getData("SELECT * FROM posts");

   foreach($rows as $post){
      $posts[] = $post;
   }
  
      $encoded_data = json_encode($posts, JSON_PRETTY_PRINT);
      file_put_contents('../../public/posts.json', $encoded_data);
}

if(isset($_POST["update"])){
   $id=$_POST['product-id'];
   $title=$_POST["post-title"];
   $category=$_POST["category-options"];
   $post_content = $_POST["post-content"];
   $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../../images/" . $filename;
    
   try{   
      $myada->updatetData("UPDATE posts set title=?,image=?,content=?,category=? where id= ?",array($title,$filename,$post_content,$category,$id));
      header('location:posts.php');
   }catch(exception $e){
      echo "error ".$e->getMessage();
   }

   move_uploaded_file($tempname, $folder);

}

if(isset($_POST['openTask'])){
   $current_post = $_POST['openTask'];
   $result = $myada->getData("SELECT * FROM posts WHERE id=?", array($current_post));
   echo json_encode($result);
}

// Statistiques

$number_posts = $myada->getNumberPosts("SELECT * FROM posts");
$number_categories = $myada->getNumberCategories("SELECT * FROM category");
$number_admins = $myada->getNumberAdmins("SELECT * FROM user");
?>