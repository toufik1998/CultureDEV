<?php
require_once('../../app/classes/post.class.php');

//  {addJock();}
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
   // $filename=$_FILES["post-picture"]["name"];
   // $image=$_FILES["post-picture"]["tmp_name"];
   // $title=$_POST["post-title"];
   // $content=$_POST["post-content"];
   // $category=$_POST['post-category'];
   $post_title=$_POST["post-title"];
    $category=$_POST["category-options"];
    $post_content = $_POST["post-content"];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../../images/" . $filename;
   foreach($post_title as $index=>$post_titles){
      $myada->insertData('INSERT INTO posts(category,title,content,image) VALUES(?,?,?,?)',array($category[$index],$post_titles,$post_content[$index],$filename[$index]));
      move_uploaded_file($tempname[$index], "../../images/" . $filename[$index]);
      header('Location: ../../public/test/dashboard.php');
      //  $data=array($post_titles,$post_content[$index],$filename[$index],$category[$index]);
      //  $result=Post::insert($data);
      //  if($result==='ok'){
      //      move_uploaded_file($image[$index],'./public/images/'.$filename[$index]);
      //       Session::set('success','Post added succesdfuly');
      //      header('location:posts');
      //  }else{
      //      echo $result;
      //  }
   }
}

 if(isset($_POST["delete"])){
    $id=$_POST["delete-id"];
    $myada->deleteData('DELETE FROM posts WHERE id=?',array($id));

 }

 if(isset($_POST["show"])){
   $search=$_POST["search"];
   $rows=$myada->getSpecifikData("SELECT * FROM posts WHERE name LIKE ? ",array("%".$_POST["search"]."%"));
 }else{
   $rows=$myada->getData("SELECT * FROM posts");
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
      header('location:dashboard.php');
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
?>