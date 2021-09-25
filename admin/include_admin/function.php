<?php

include_once "database.php";

class Operation extends Database{

  public function Insert_Important($table,$input){

      $sql="";
      $sql="INSERT INTO ".$table;
      $sql.="(".implode(",",array_keys($input)).") VALUES ";
      $sql.="('".implode("','",array_values($input))."')" ;

      $query=mysqli_query($this->connection,$sql);
      
      if($query){
        return true;
      }
  }

  public function New_Important_Posts($table,$input){
          
    $sql="";
    $sql="INSERT INTO ".$table;
    $sql.="(".implode(",",array_keys($input)).") VALUES ";
    $sql.="('".implode("','",array_values($input))."')" ;

    $query=mysqli_query($this->connection,$sql);
    
    if($query){
      return true;
    }



  }

public function Select_Post_Count($tablename,$treatureid){

  $count=array();
  $sql="SELECT * FROM $tablename WHERE treature_id=$treatureid";
  $query=mysqli_query($this->connection,$sql);
  $num_row=mysqli_num_rows($query);
  

  return $num_row;
}


public function Select_Trend_Count($tablename,$trendid){

  $count=array();
  $sql="SELECT * FROM $tablename WHERE trend_id=$trendid";
  $query=mysqli_query($this->connection,$sql);
  $num_row=mysqli_num_rows($query);
  

  return $num_row;
}

  public function New_Treature_Posts($table,$input){
          
    $sql="";
    $sql="INSERT INTO ".$table;
    $sql.="(".implode(",",array_keys($input)).") VALUES ";
    $sql.="('".implode("','",array_values($input))."')" ;

    $query=mysqli_query($this->connection,$sql);
    
    if($query){
      return true;
    }



  }


  public function Select_Important_Posts($table,$trend_id){
    
    $post_array=array();
    $posts="SELECT * FROM $table WHERE trend_id=$trend_id";
    $post_query=mysqli_query($this->connection,$posts);
    while($row=mysqli_fetch_assoc($post_query)){
      $post_array[]=$row;
    }

    return $post_array;
  }


  public function Select_Treature_Posts($table,$treature_id){
    
    $post_array=array();
    $posts="SELECT * FROM $table WHERE treature_id=$treature_id";
    $post_query=mysqli_query($this->connection,$posts);
    while($row=mysqli_fetch_assoc($post_query)){
      $post_array[]=$row;
    }

    return $post_array;
  }

  



  public function Select_Proverb($table){
    $proverb_sql="SELECT * FROM $table";
    $proverbs=array();
    $sql_list=mysqli_query($this->connection,$proverb_sql);
    while($row=mysqli_fetch_assoc($sql_list)){
      $proverbs[]=$row;
    }
    return $proverbs;
    
  }


  public function Select_Important($table){
    $sql1="SELECT * FROM $table WHERE status='important'";
    $last=array();
    $problem=mysqli_query($this->connection,$sql1);
    while($row=mysqli_fetch_assoc($problem)){
      $last[]=$row;
    }
    return $last;
    
  }

  public function Insert_Nine($table,$input){

    $sql="";
    $sql="INSERT INTO ".$table;
    $sql.="(".implode(",",array_keys($input)).") VALUES ";
    $sql.="('".implode("','",array_values($input))."')" ;

    $query=mysqli_query($this->connection,$sql);
    
    if($query){
      return true;
    }
}


public function Select_Title($table){
  $sql2="SELECT * FROM $table WHERE status='nine'";
  $project=array();
  $title1=mysqli_query($this->connection,$sql2);
  while($row=mysqli_fetch_assoc($title1)){
    $project[]=$row;
  }
  return $project;
  
}

  public function Subscribe_User($table){

     $sql="SELECT * FROM ".$table;
     $query=mysqli_query($this->connection,$sql);
     return mysqli_num_rows($query);


  }

  public function Comments($table){

    $sql="SELECT * FROM ".$table;
    $query=mysqli_query($this->connection,$sql);
    return mysqli_num_rows($query);


 }


  public function Insert_User($table,$user){
         
    $admin="";
    $admin.="INSERT INTO ".$table;
    $admin.="(".implode(",",array_keys($user)).") VALUES ";
    $admin.="('".implode("','",array_values($user))."')" ;

    $admin_query=mysqli_query($this->connection,$admin);
    
    if($admin_query){
      return true;
    }
  

  }

  
  public function Update_Home_Address($table,$input,$id){
 

      
    $title_query='';
    $condition='';
  
    foreach ($input as $key => $value) {
        $title_query .=$key . "='".$value."', ";
    }
    $title_query=substr($title_query,0,-2);
  
  
    foreach ($id as $key => $value) {
       $condition .= $key . "='".$value."' AND ";
    }
  
    $condition =substr($condition,0,-5);
  
    $update_sql="UPDATE $table SET $title_query WHERE $condition";
    $update_query=mysqli_query($this->connection,$update_sql);
  
    if($update_query){
  
      return true;
  
    }
  
  }

  public function Select_Update_Proverbs($table,$id){
      
    $update_array=array();
    $update_sql="SELECT * FROM $table WHERE id=$id";
    $update_query=mysqli_query($this->connection,$update_sql);
    while($update=mysqli_fetch_assoc($update_query)){
      $update_array[]=$update;
    }
  
    return $update_array;

  }


  public function Insert_Proverbs($table,$inputs){
         
    $pro="";
    $pro.="INSERT INTO ".$table;
    $pro.="(".implode(",",array_keys($inputs)).") VALUES ";
    $pro.="('".implode("','",array_values($inputs))."')" ;

    $pro_query=mysqli_query($this->connection,$pro);
    
    if($pro_query){
      return true;
    }
    else{
      return false;
    }

  }


  

  public function Update_Proverbs($table,$input,$id){
 

      
    $title_query='';
    $condition='';

    foreach ($input as $key => $value) {
        $title_query .=$key . "='".$value."', ";
    }
    $title_query=substr($title_query,0,-2);


    foreach ($id as $key => $value) {
       $condition .= $key . "='".$value."' AND ";
    }
 
    $condition =substr($condition,0,-5);

    $update_sql="UPDATE $table SET $title_query WHERE $condition";
    $update_query=mysqli_query($this->connection,$update_sql);

    if($update_query){

      return true;

    }

}
 



  public function Update_Profile($table,$input,$id){
 

      
    $title_query='';
    $condition='';

    foreach ($input as $key => $value) {
        $title_query .=$key . "='".$value."', ";
    }
    $title_query=substr($title_query,0,-2);


    foreach ($id as $key => $value) {
       $condition .= $key . "='".$value."' AND ";
    }
 
    $condition =substr($condition,0,-5);

    $update_sql="UPDATE $table SET $title_query WHERE $condition";
    $update_query=mysqli_query($this->connection,$update_sql);

    if($update_query){

      return true;

    }

}
 

  //select user(admins)
  public function All_Admin($table){

    $user_list="SELECT * FROM $table";
    $lists=array();
    $user_query=mysqli_query($this->connection,$user_list);
    while($row=mysqli_fetch_assoc($user_query)){
        $lists[]=$row;
    }

    return $lists;

  }


  public function Select_Profile($table,$name){

    $profile_arr=array();
    $profile="SELECT * FROM user WHERE name='$name'";
    $profile_user=mysqli_query($this->connection,$profile);
    $profiles=mysqli_fetch_assoc($profile_user);

    $profile_arr[]=$profiles;

    return $profile_arr;

  }

  public function delete_comment($id){

     $delete="DELETE FROM comment WHERE id=$id";
     $query=mysqli_query($this->connection,$delete);
     header("Location:../view_comment.php?comment_id=$id");

  }


  public function home_comment($id){

    $delete="DELETE FROM comment WHERE id=$id";
    $query=mysqli_query($this->connection,$delete);
    header("Location:../home_comment.php?eye=$id");

 }

  public function delete_trend_comment($table,$id){

    $trend_cmt1=$_GET['trend_cmt1'];
    $delete="DELETE FROM $table WHERE comment_id=$id";
    $query=mysqli_query($this->connection,$delete);
    header("Location:../view_comment.php?trend_cmt=$trend_cmt1");

 }


  public function delete_treature($table,$back,$id){

   
    $delete="DELETE FROM $table WHERE post_id=$id";
    $query=mysqli_query($this->connection,$delete);
    $comment="DELETE FROM treature_comment WHERE post_id=$id";
    $query1=mysqli_query($this->connection,$comment);
    
    header("Location:../treature_post.php?treature_id=$back");

 }

 public function delete_task_treature($table,$id){

   
  $delete="DELETE FROM $table WHERE id=$id";
  $query=mysqli_query($this->connection,$delete);
  header("Location:../summary.php");

}

public function delete_task_trend($table,$id){

   
  $delete="DELETE FROM $table WHERE id=$id";
  $query=mysqli_query($this->connection,$delete);
  header("Location:../summary.php");

}

 public function delete_proverb($table,$id){

   
  $delete="DELETE FROM $table WHERE id=$id";
  $query=mysqli_query($this->connection,$delete);
 
  header("Location:../proverbs.php");

}

 public function delete_trend($table,$back,$id){

  
  $delete="DELETE FROM $table WHERE post_id=$id";
  $query=mysqli_query($this->connection,$delete);

  $comment="DELETE FROM trend_comment WHERE post_id=$id";
  $query1=mysqli_query($this->connection,$comment);

  header("Location:../problem_posts.php?trend_id=$back");

}



  public function Comment($table){

    $com="SELECT * FROM $table";
    $qry=mysqli_query($this->connection,$com);
    $com_array=array();

    while($row2=mysqli_fetch_assoc($qry)){
      $com_array[]=$row2;
    }
    return $com_array;

  }

  }





$object=new Operation();


//insert important
if(isset($_POST['important'])){

    $image_name=basename($_FILES['image']['name']);
    $image_temp=$_FILES['image']['tmp_name'];
    move_uploaded_file($image_temp,'../trend_image/'.$image_name);

    $video_name=basename($_FILES['video']['name']);
    $video_temp=$_FILES['video']['tmp_name'];
    move_uploaded_file($video_temp,'../trend_video/'.$video_name);

    $video_path="http://linthike.thantzin.ml/trend_video/".$video_name;




    $path="http://linthike.thantzin.ml/trend_image/".$image_name;


  $important=array(
    "title"=>$_POST['title'],
    "image"=>$image_name,
    "image_location"=>$path,
    "video"=>$video_name,
    "video_location"=>$video_path,
    "summary"=>$_POST['content'],
    "status" =>"important"
  );

  if($object->Insert_Important("tasks",$important))
  {
header('Location:summary.php');

  }
  

}


//insert nine treature
if(isset($_POST['nine'])){

  $image_name=basename($_FILES['image']['name']);
    $image_temp=$_FILES['image']['tmp_name'];
    move_uploaded_file($image_temp,'../title_image/'.$image_name);

    $path="http://linthike.thantzin.ml/title_image/".$image_name;


    $video_name=basename($_FILES['video']['name']);
    $video_temp=$_FILES['video']['tmp_name'];
    move_uploaded_file($video_temp,'../title_video/'.$video_name);

    $video_path="http://linthike.thantzin.ml/title_video/".$video_name;



  $important=array(
    "title"=>$_POST['title'],
    "image"=>$image_name,
    "image_location"=>$path,
    "video"=>$video_name,
    "video_location"=>$video_path,
    "summary"=>$_POST['content'],
    "status" =>"nine"
  );

  if($object->Insert_Nine("tasks",$important))
  {
header('Location:summary.php');

  }


}

if(isset($_POST['proverb'])){

  $image_name=basename($_FILES['image']['name']);
    $image_temp=$_FILES['image']['tmp_name'];
    move_uploaded_file($image_temp,'../proverb_image/'.$image_name);

    $path="http://linthike.thantzin.ml/proverb_image/".$image_name;

  $proverb=array(
    "religion"=>$_POST['name'],
    "image"=>$image_name,
    "image_location"=>$path,
    "first_proverb"=>$_POST['first'],
    "second_proverb" =>$_POST['second']
  );

  if($object->Insert_Proverbs("proverbs",$proverb))
  {
header('Location:proverbs.php');

  }


}

if(isset($_POST['update_proverb'])){


  $proverbs_id=array('id' => $_GET['proverb_id']);
  $image_name=basename($_FILES['image']['name']);
  $image_temp=$_FILES['image']['tmp_name'];

    if(empty($image_name)){
      $proverb_id=$_GET['proverb_id'];
      $image="SELECT * FROM proverbs WHERE id=$proverb_id";
      $photo=mysqli_query($object->connection,$image);
      $row=mysqli_fetch_assoc($photo);
      $image_name=$row['image'];
   }
   move_uploaded_file($image_temp,'../proverb_image/'.$image_name);
   $path="http://linthike.thantzin.ml/proverb_image/".$image_name;

  $proverb=array(
    "religion"=>$_POST['name'],
    "image"=>$image_name,
    "image_location"=>$path,
    "first_proverb"=>$_POST['first'],
    "second_proverb" =>$_POST['second']
  );

  if($object->Update_Proverbs("proverbs",$proverb,$proverbs_id))
  {
header('Location:proverbs.php');

  }


}


//insert user
if(isset($_POST['user'])){

 
  $name=$_POST['name'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $password=password_hash($password,PASSWORD_BCRYPT,['one' =>true]);

  $image_name=basename($_FILES['image']['name']);
  $image_temp=$_FILES['image']['tmp_name'];
  move_uploaded_file($image_temp,'userimage/'.$image_name);
  $created_time=date("Y-m-d H:i:s");

  $check_user="SELECT * FROM user WHERE name='$name' OR email='$email'";
  $check_sql=mysqli_query($object->connection,$check_user);
  $num_row=mysqli_num_rows($check_sql);

  if($num_row > 0){

    $msg="Account Already Exists";
     header("Location:user.php?user=insertuser");

      }

  else{

      $user=array();
      $user=array(

      "name"=>$name,
      "email"=>$email,
      "password"=>$password,
      "image"=>$image_name,
      "address"=>$address,
      "phone"=>$phone,
      "created_time"=>$created_time

      );

      if($object->Insert_User("user",$user)){
          header("Location:user.php");
      }
  }

}


if(isset($_POST['new_problem'])){

  $post=array();
  $trend_id=$_GET['trend_id'];
  $imageArray=array();
  $title=$_POST['title']; 
  $content=$_POST['information'];
  $posted_time=date("Y-m-d H:i:s");
  $filename=$_FILES['image']['name'];
  $tmpname=$_FILES['image']['tmp_name'];
  $filetype=$_FILES['image']['type'];
  $path=array();


  if(count($tmpname) < 3 ){

    header("Location:problem_posts.php?important_post=new_post&trend_id=$trend_id&msg=Select Three Images");

}
else{

  for($i=0;$i<=count($tmpname)-1;$i++){
    $name=addslashes($filename[$i]);
    array_push($imageArray,$name);


     move_uploaded_file($tmpname[$i],"../post_image/".$filename[$i]);

  }

  for($i=0;$i<=count($tmpname)-1;$i++){
    $name=addslashes($filename[$i]);
    $image_path="http://linthike.thantzin.ml/post_image/".$name;
    array_push($path,$image_path);



  }

  $imageArray=serialize($imageArray);
  $image_path=serialize($path);
  $post=array(
    "trend_id"=>$trend_id,
    "post_titles"=>$title,
    "post_images"=>$imageArray,
    "image_locations"=>$image_path,
    "post_descriptions"=>$content,
    "posted_time"=>$posted_time
  );

  if($object->New_Important_Posts("problem_post_list",$post)){

    header("Location:problem_posts.php?trend_id=$trend_id");
  }
 
}
}




if(isset($_POST['new_treature'])){

  $path=array();
  $treature_id=$_GET['treature_id'];
  $imageArray=array();
  $title=$_POST['title']; 
  $content=$_POST['information'];
  $posted_time=date("Y-m-d H:i:s");
  $filename=$_FILES['image']['name'];
  $tmpname=$_FILES['image']['tmp_name'];
  $filetype=$_FILES['image']['type']; 

  if(count($tmpname) < 3 ){

        header("Location:treature_post.php?treature_post=new_post_treature&treature_id=$treature_id&msg=Select Three Images");

  }
  else{

  for($i=0;$i<=count($tmpname)-1;$i++){
    $name=addslashes($filename[$i]);
    array_push($imageArray,$name);


     move_uploaded_file($tmpname[$i],"../post_image/".$filename[$i]);

  }


  for($i=0;$i<=count($tmpname)-1;$i++){
    $name=addslashes($filename[$i]);
    $image_path="http://linthike.thantzin.ml/post_image/".$name;
    array_push($path,$image_path);



  }

  $imageArray=serialize($imageArray);
  $image_path=serialize($path);

 
  $post=array(
    "treature_id"=>$treature_id,
    "post_titles"=>$title,
    "post_images"=>$imageArray,
    'image_locations'=>$image_path,
    "post_descriptions"=>$content,
    "posted_time"=>$posted_time
  );

  if($object->New_Treature_Posts("treature_post_list",$post)){

    header("Location:treature_post.php?treature_id=$treature_id");
  }
}
}


if(isset($_POST['profile_update'])){

  $user_id=array("id"=>$_GET['user_id']);
  $user=array();
  $name=$_POST['name'];
  $image_name=basename($_FILES['image']['name']);
  $image_temp=$_FILES['image']['tmp_name'];
  move_uploaded_file($image_temp,'../userimage/'.$image_name);
  $email=$_POST['email'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $password=password_hash($password,PASSWORD_BCRYPT,['one' =>true]);

  $user=array(
"name"=>$name,
"email"=>$email,
"password"=>$password,
"image"=>$image_name,
"address"=>$address,
"phone"=>$phone,
  );

  if($object->Update_Profile("user",$user,$user_id)){
    header("Location:../profile.php");

  }


}


if(isset($_POST['home_update'])){

  $home=array();
  $home_id=array("id"=>$_GET['home_id']);
  $country=$_POST['country'];
  $current=$_POST['current_address'];
  $permanent=$_POST['permanent_address'];
  $first=$_POST['first_email'];
  $second=$_POST['second_email'];
  $first_ph=$_POST['first_phone'];
  $second_ph=$_POST['second_phone'];

  $home=array(
    "first_email"=>$first,
    "second_email"=>$second,
    "first_phone"=>$first_ph,
    "second_phone"=>$second_ph,
    "country"=>$country,
    "current_address"=>$current,
    "permanent_address"=>$permanent,
  );

  if($object->Update_Home_Address("contactus",$home,$home_id)){
    header("Location:../homeaddress.php");
  }


}


//delete comment
if(isset($_GET['delete']))
{
  $id=$_GET['delete'];
 $object->delete_comment($id);
}

//home comment
if(isset($_GET['delete_eye']))
{
  $id=$_GET['delete_eye'];
 $object->home_comment($id);
}

//delete treature post

if(isset($_GET['treature_update1']))
{
  $back=$_GET['back_id'];
  $id=$_GET['treature_update1'];
 $object->delete_treature("treature_post_list",$back,$id);
  
}

//delete proverbs
if(isset($_GET['delete_proverb']))
{
  $id=$_GET['delete_proverb'];
 $object->delete_proverb("proverbs",$id);
}

//delete trend post
if(isset($_GET['trend_update1']))
{
  $back=$_GET['delete_id'];
  $id=$_GET['trend_update1'];
 $object->delete_trend("problem_post_list",$back,$id);
  
}


if(isset($_GET['task_treature']))
{
  
  $id=$_GET['task_treature'];
 $object->delete_task_treature("tasks",$id);
  
}

if(isset($_GET['task_trend']))
{
 
  $id=$_GET['task_trend'];
 $object->delete_task_trend("tasks",$id);
  
}



if(isset($_GET['trend_cmt_delete']))
{
 
  $id=$_GET['trend_cmt_delete'];
 $object->delete_trend_comment("trend_comment",$id);
  
}

?>