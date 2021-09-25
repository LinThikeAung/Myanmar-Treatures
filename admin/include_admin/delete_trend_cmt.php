<?php include_once "database.php";

class Trend_Comment extends Database{

public function Delete_Trend_Comment($table,$input){
 
    $delete="DELETE FROM $table WHERE comment_id=$input";
    $query=mysqli_query($this->connection,$delete);
  
}

}
   $object3=new Trend_Comment();
    
     $comment_id= $_GET['id'];
  
   
    $object3->Delete_Trend_Comment("trend_comment",$comment_id);
       
    





?>