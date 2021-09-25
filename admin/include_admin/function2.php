<?php include_once "database.php" ?>

<?php 

class Treature_Trend_Function extends Database{


  
    public function Select_Treature($tablename,$item){
   
        $treature=array();
        $sql4="SELECT * FROM $tablename WHERE status='$item'";
        $query4=mysqli_query($this->connection,$sql4);

      while($roww=mysqli_fetch_assoc($query4)){
          $treature[]=$roww;
      }

      return $treature;

    }


    public function Select_Trend($tablename,$item){
   
        $trend=array();
        $sql5="SELECT * FROM $tablename WHERE status='$item'";
        $query5=mysqli_query($this->connection,$sql5);

      while($roww1=mysqli_fetch_assoc($query5)){
          $trend[]=$roww1;
      }

      return $trend;

    }


    public function Treature_Category($table){

      $treature_array=array();
      $query_treature="SELECT * FROM $table";
      $treature=mysqli_query($this->connection,$query_treature);
      while($rows=mysqli_fetch_assoc($treature)){

        $treature_array[]=$rows;
      }
       return $treature_array;

    }


    public function Trend_Category($table){

      $trend_array=array();
      $query_trend="SELECT * FROM $table";
      $trend=mysqli_query($this->connection,$query_trend);
      while($rows=mysqli_fetch_assoc($trend)){

        $trend_array[]=$rows;
      }
       return $trend_array;

    }


    public function Add_Treature_Category($table,$input){

      $sql="";
      $sql="INSERT INTO ".$table;
      $sql.="(".implode(",",array_keys($input)).") VALUES ";
      $sql.="('".implode("','",array_values($input))."')" ;

      $query=mysqli_query($this->connection,$sql);
      
      if($query){
        return true;
      }

    }


    // public function Select_Subscribe_List($table){

    //   $list_query="SELECT * FROM subscribe WHERE notification=1";
    //   $list_result=mysqli_query($this->connection,$list_query);
    //   $row_count=mysqli_num_rows($list_result);
    //   return $row_count;

    // }

    public function Select_Comment_List($table){

      $comment=array();
      $list_query="SELECT * FROM $table WHERE notification=1";
      $list_result=mysqli_query($this->connection,$list_query);
    //  $row_count=mysqli_num_rows($list_result);
      while($row=mysqli_fetch_assoc($list_result)){
          $comment[]=$row;
      }

      return $comment;

    }


    public function Select_Objective($table){

     $objectives=array();
     $objective_sql="SELECT * FROM $table";
     $objective_query=mysqli_query($this->connection,$objective_sql);

     while($obj_row=mysqli_fetch_assoc($objective_query)){
       $objectives[]=$obj_row;
     }

       return $objectives;

    }


    public function Update_Nine($table,$input,$id){

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


    
    public function Update_Trend($table,$input,$id){
 

      
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




    
public function Update_Important_Posts($table,$input,$id){
 

      
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



public function Update_Treature_Posts($table,$input,$id){
 

      
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


public function Select_Home_Comment($table,$id){

  $arr=array();
$query="SELECT * FROM $table WHERE id=$id ";
$sql=mysqli_query($this->connection,$query);
while($row=mysqli_fetch_assoc($sql)){
  $arr[]=$row;
}

return $arr;

}
    
public function View_Post_Comment($table,$id,$start,$perpage){

  //echo $start,$perpage;
  $comment_result=array();
  $list_query="SELECT * FROM $table  WHERE post_id=$id ORDER BY comment_id DESC  LIMIT $start,$perpage";
  $list_result=mysqli_query($this->connection,$list_query);

  while($row=mysqli_fetch_assoc($list_result)){
      $comment_result[]=$row;
  }

  return $comment_result;

}
    

public function Pagination_Trend_Comment($table,$id){

  $pagination=array();
  $query="SELECT * FROM $table WHERE post_id=$id";
  $result=mysqli_query($this->connection,$query);
 //$post_count=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
  $pagination[]=$row;
}

return $pagination;
}


    public function View_Comment($table,$id){

      $comment_result=array();
      $list_query="SELECT * FROM $table WHERE id=$id";
      $list_result=mysqli_query($this->connection,$list_query);
    //  $row_count=mysqli_num_rows($list_result);
      while($row=mysqli_fetch_assoc($list_result)){
          $comment_result[]=$row;
      }

      return $comment_result;

    }

    public function Update_Notification($table,$comment_id){

      $update_noti="UPDATE comment SET notification=0 WHERE id=$comment_id";
      $update_query=mysqli_query($this->connection,$update_noti);
      
    }


    public function Select_Address($table){
      
      $addresses=array();
      $address_sql="SELECT * FROM $table ";
      $address_result=mysqli_query($this->connection,$address_sql);

      while($addr=mysqli_fetch_assoc($address_result)){
          $addresses[]=$addr;
      }


      return $addresses;
    }


    
public function Select_Update_Problem_Posts($table,$id){

  $trend_arr=array();
  $trends="SELECT * FROM $table WHERE post_id=$id";
  $trend_sql=mysqli_query($this->connection,$trends);
   while($trend_results=mysqli_fetch_assoc($trend_sql)){

    $trend_arr[]=$trend_results;
   }

return $trend_arr;


}


public function Select_Update_Treature_Posts($table,$id){

  $trend_arr=array();
  $trends="SELECT * FROM $table WHERE post_id=$id";
  $trend_sql=mysqli_query($this->connection,$trends);
   while($trend_results=mysqli_fetch_assoc($trend_sql)){

    $trend_arr[]=$trend_results;
   }

return $trend_arr;


}


    public function Add_Trend_Category($table,$input){

      $sql="";
      $sql="INSERT INTO ".$table;
      $sql.="(".implode(",",array_keys($input)).") VALUES ";
      $sql.="('".implode("','",array_values($input))."')" ;

      $query=mysqli_query($this->connection,$sql);
      
      if($query){
        return true;
      }

    }

    public function Select_Update_Treature($table,$treature){
      
      $update_array=array();
      $update_sql="SELECT * FROM $table WHERE id=$treature";
      $update_query=mysqli_query($this->connection,$update_sql);
      while($update=mysqli_fetch_assoc($update_query)){
        $update_array[]=$update;
      }
    
      return $update_array;

    }



    public function Select_Update_Trend($table,$trend){
      
      $update_array=array();
      $update_sql="SELECT * FROM $table WHERE id=$trend";
      $update_query=mysqli_query($this->connection,$update_sql);
      while($update=mysqli_fetch_assoc($update_query)){
        $update_array[]=$update;
      }
    
      return $update_array;

    }

    public function Update_Objective($tablename,$input){
      $objective_sql="";
     $data =implode(",",array_keys($input));
     $value=implode("','",array_values($input));
      $objective_sql="UPDATE $tablename SET  $data='$value' ";


      // $objective_sql.="(".implode(",",array_keys($input)).") VALUES ";
      // $objective_sql.="('".implode("','",array_values($input))."')" ;


      $query=mysqli_query($this->connection,$objective_sql);
      
      if($query){
        return true;
      }

    }


}
$obj=new Treature_Trend_Function();

if(isset($_POST['add_treature'])){
$name=$_POST['title'];
$eng=$_POST['eng_title'];

$image_name=basename($_FILES['image']['name']);
$image_temp=$_FILES['image']['tmp_name'];
move_uploaded_file($image_temp,'../title_image/'.$image_name);


$summary=$_POST['summary'];
$arr=array(
  "title"=>$name,
  "eng_title"=>$eng
);

if($obj->Add_Treature_Category("treature_category",$arr)){
       header("Location:treature_trend_category.php");
}
}


if(isset($_POST['add_trend'])){
  $name=$_POST['title'];
  $eng=$_POST['eng_title'];
  $summary=$_POST['summary'];
  $arr1=array(
    "trend_title"=>$name,
    "eng_title"=>$eng
  );

  if($obj->Add_Trend_Category("trend_category",$arr1)){
    header("Location:treature_trend_category.php");
  }
}



if(isset($_POST['objective_update'])){

    $description=$_POST['objective'];
    $project_obj=array();

    $project_obj=array(
      "objective"=>$description
    );

    if($obj->Update_Objective("about",$project_obj)){
      header("Location:aboutus.php");
    }


}



//insert nine treature
if(isset($_POST['update_trend'])){

  $trends_id=array('id' => $_GET['update_trend']);
 
  $image_name=basename($_FILES['image']['name']);
  $image_temp=$_FILES['image']['tmp_name'];


  $video_name=basename($_FILES['video']['name']);
  $video_temp=$_FILES['video']['tmp_name'];
 
 


  if(empty($image_name)){
    $trend_id=$_GET['update_trend'];
    $image="SELECT * FROM tasks WHERE id=$trend_id";
    $photo=mysqli_query($obj->connection,$image);
    $row=mysqli_fetch_assoc($photo);
    $image_name=$row['image'];
    $path=$row['image_location'];
 }

 move_uploaded_file($image_temp,'../trend_image/'.$image_name);
 $path="http://linthike.thantzin.ml/trend_image/".$path;


 
 

  if(empty($video_name)){
    $trend_id=$_GET['update_trend'];
    $video="SELECT * FROM tasks WHERE id=$trend_id";
    $movie=mysqli_query($obj->connection,$video);
    $row1=mysqli_fetch_assoc($movie);
    $video_name=$row1['video'];
    $video_path=$row1['video_location'];

 }

 move_uploaded_file($video_temp,'../trend_video/'.$video_name);
$video_path="http://linthike.thantzin.ml/trend_video/".$video_path;

$update_trending=array(
  "title"=>$_POST['title'],
  "image"=>$image_name,
  "image_location"=>$path,
  "video"=>$video_name,
  "video_location"=>$video_path,
  "summary"=>$_POST['content'],
  "status" =>"important"
);

if($obj->Update_Trend("tasks",$update_trending,$trends_id))
{
header('Location:summary.php');

}


}



if(isset($_POST['update_problem'])){

  $post=array();
 
  $trend_update=array('post_id' => $_GET['trend_update']);
  $trend_id=$_GET['trend_update'];

  $title=$_POST['title']; 
  $content=$_POST['information'];
  $posted_time=date("Y-m-d H:i:s");
  $filename=$_FILES['image']['name'];
  //$filename1=basename($_FILES['image']['name']);
  $tmpname=$_FILES['image']['tmp_name'];
  $filetype=$_FILES['image']['type'];
 $imageArray=array();
 $path=array();
 $check=serialize($filename);
  if($check == 'a:1:{i:0;s:0:"";}'){
  
    $trend_id=$_GET['trend_update'];
    $image="SELECT * FROM problem_post_list WHERE post_id=$trend_id";
    $photo=mysqli_query($obj->connection,$image);
   
    $row=mysqli_fetch_array($photo);


  $number=count(unserialize($row['post_images']));
  $number1=count(unserialize($row['image_locations']));

    for($i=0;$i <= $number1-1;$i++){
      $name=unserialize($row['image_locations'])[$i];
      array_push($path,$name);
   
  
    }

    for($i=0;$i <= $number-1;$i++){
      $name=unserialize($row['post_images'])[$i];
      array_push($imageArray,$name);
  
  
    }

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
      
}
$imageArray=serialize($imageArray);
$image_path=serialize($path);


$post=array(
"post_titles"=>$title,
"post_images"=>$imageArray,
"image_locations"=>$image_path,
"post_descriptions"=>$content,
"posted_time"=>$posted_time
);

if($obj->Update_Important_Posts("problem_post_list",$post,$trend_update)){

header("Location:problem_posts.php?important_post=view_detail&trend_update=$trend_id");
}
}






if(isset($_POST['update_treature_post'])){

  $post=array();
 
  $treature_update=array('post_id' => $_GET['treature_update']);
  $treature_id=$_GET['treature_update'];

  $title=$_POST['title']; 
  $content=$_POST['information'];
  $posted_time=date("Y-m-d H:i:s");
  $filename=$_FILES['image']['name'];
  $filename1=basename($_FILES['image']['name']);
  $tmpname=$_FILES['image']['tmp_name'];
  $filetype=$_FILES['image']['type'];
 
  $imageArray=array();
  $path=array();
  $check=serialize($filename);
  
  if($check == 'a:1:{i:0;s:0:"";}'){
    $treature_id=$_GET['treature_update'];
    $image="SELECT * FROM treature_post_list WHERE post_id=$treature_id";
    $photo=mysqli_query($obj->connection,$image);
   
    $row=mysqli_fetch_array($photo);


  $number=count(unserialize($row['post_images']));
  $number1=count(unserialize($row['image_locations']));

    for($i=0;$i <= $number1-1;$i++){
      $name1=unserialize($row['image_locations'])[$i];
      array_push($path,$name1);
   
  
  
    }

    for($i=0;$i <= $number-1;$i++){
      $name=unserialize($row['post_images'])[$i];
      array_push($imageArray,$name);
  
  
    }

    
  
    
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
  


  } 
  
$imageArray=serialize($imageArray);
$image_path=serialize($path);
 
  


 

  $post=array(
    "post_titles"=>$title,
     "post_images"=>$imageArray,
     "image_locations"=>$image_path,
    "post_descriptions"=>$content,
    "posted_time"=>$posted_time
  );

  if($obj->Update_Treature_Posts("treature_post_list",$post,$treature_update)){

    header("Location:treature_post.php?treature_post=view_detail_treature&treature_update=$treature_id");
  }
 

}

//insert nine treature
if(isset($_POST['update_treature'])){

    $treature_id=array('id' => $_GET['update_treature']);
    $image_name=basename($_FILES['image']['name']);
    $image_temp=$_FILES['image']['tmp_name'];
   

    if(empty($image_name)){
      $treatures_id=$_GET['update_treature'];
      $image="SELECT * FROM tasks WHERE id=$treatures_id";
      $photo=mysqli_query($obj->connection,$image);
      $row=mysqli_fetch_assoc($photo);
      $image_name=$row['image'];
      $path=$row['image_location'];
   }

   move_uploaded_file($image_temp,'../title_image/'.$image_name);
   $path="http://linthike.thantzin.ml/title_image/".$path;
 
    $video_name=basename($_FILES['video']['name']);
    $video_temp=$_FILES['video']['tmp_name'];
   
    if(empty($video_name)){
  
      $treatures_id=$_GET['update_treature'];
      $video="SELECT * FROM tasks WHERE id=$treatures_id";
      $movie=mysqli_query($obj->connection,$video);
      $row1=mysqli_fetch_assoc($movie);
      $video_name=$row1['video'];
      $video_path=$row1['video_location'];

   }

   move_uploaded_file($video_temp,'../title_video/'.$video_name);
   $video_path="http://linthike.thantzin.ml/title_video/".$video_path;


  $update_title=array(
    "title"=>$_POST['title'],
    "image"=>$image_name,
    "image_location"=>$path,
    "video"=>$video_name,
    "video_location"=>$video_path,
    "summary"=>$_POST['content'],
    "status" =>"nine"
  );

  if($obj->Update_Nine("tasks",$update_title,$treature_id))
  {
 header('Location:summary.php');

  }


}

?>