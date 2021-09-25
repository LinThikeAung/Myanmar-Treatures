<?php include_once "db.php";

class Comment extends Home_Db{

public function Insert_Comment($table,$input){
    $sql1="";
     $sql1="INSERT INTO ".$table;
     $sql1.="(".implode(",",array_keys($input)).") VALUES ";
     $sql1.="('".implode("','",array_values($input))."')" ;

     $query1=mysqli_query($this->connection,$sql1);
        
     if($query1){
       return true;
     }
}


}


   $object2=new Comment();
     $dicuss=array();
    $name= $_POST['name'];
    $feedback= $_POST['feedback'];
    $time=date("Y-m-d H:i:s");
    $noti=1;
    $dicuss=array(
           "name"=>$name,
           "feedback"=>$feedback,
           "notification"=>$noti,
           "commented_time"=>$time
          
    );
    if($object2->Insert_Comment("comment",$dicuss)){
        echo "Success!";
    }





?>