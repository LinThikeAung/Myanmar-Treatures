<?php 



include_once "db.php";

class Trend_Comment_Insert extends Home_Db{

   
  public function Insert_Trend_Comment($table,$input){
        
    $sql2="";
    $sql2="INSERT INTO ".$table;
    $sql2.="(".implode(",",array_keys($input)).") VALUES ";
    $sql2.="('".implode("','",array_values($input))."')" ;

    $query2=mysqli_query($this->connection,$sql2);

    if($query2){
      return true;
    }
 }


}


$object5=new Trend_Comment_Insert();


    $post_id=$_GET['post_id'];
      
    $sql_post="SELECT * FROM problem_post_list WHERE post_id=$post_id";
    $sql_query=mysqli_query($object5->connection,$sql_post);
    $row_name=mysqli_fetch_assoc($sql_query);
    $post_category=$row_name['post_titles'];
    $trend_id=$row_name['trend_id'];

     
    $comment=array();
    //$category=$_GET['title'];
    $post_comment=$_POST['comment'];
    $time=date("Y-m-d H:i:s");
    $comment=array(
         "trend_id"=>$trend_id,
         "post_id"=>$post_id,
         "post_categories"=>$post_category,
         "comments"=>$post_comment,
         "commented_time"=>$time
    );
    if($object5->Insert_Trend_Comment("trend_comment",$comment)){
         echo "Success";
    }



?>