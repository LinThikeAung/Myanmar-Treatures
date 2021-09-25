<?php

include_once "db.php";

class OOP extends Home_Db{

 public function Subscribe_User($table,$input){

     $sql="";
     $sql="INSERT INTO ".$table;
     $sql.="(".implode(",",array_keys($input)).") VALUES ";
     $sql.="('".implode("','",array_values($input))."')" ;

     $query=mysqli_query($this->connection,$sql);
     if($query){
       return true;
     }
 }

 public function Select_User($table,$input){
  
 
 
     $sql="SELECT * FROM $table WHERE email='$input'";
     $answer=array();
     $result=mysqli_query($this->connection,$sql);
   
      while($row=mysqli_fetch_assoc($result)){
               $answer[]=$row;
          
          }
          return $answer;
      
  
}


public function Select_Market_User($table,$input){
  
 
 
     $sql="SELECT * FROM $table WHERE email='$input'";
     $answer=array();
     $result=mysqli_query($this->connection,$sql);
   
      while($row=mysqli_fetch_assoc($result)){
               $answer[]=$row;
          
          }
          return $answer;
      
  
}


public function Select_Summary($table,$id){

     $summary_arr=array();
     $summary="SELECT * FROM $table WHERE id=$id";
     $summary_sql=mysqli_query($this->connection,$summary);
     $results=mysqli_fetch_assoc($summary_sql);
     $summary_arr[]=$results;

     return $summary_arr;

     
}

public function Select_Problems($table,$status){
   $problem1=array();
   $problem_sql="SELECT * FROM $table WHERE status='important'";
   $problem_query=mysqli_query($this->connection,$problem_sql);
  while($problem_result=mysqli_fetch_assoc($problem_query)){
       $problem1[]=$problem_result;
  }
   
  return $problem1;
   
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

public function Select_Projects($table,$status){
     $project1=array();
     $project_sql="SELECT * FROM $table WHERE status='nine'";
     $project_query=mysqli_query($this->connection,$project_sql);
    while($project_result=mysqli_fetch_assoc($project_query)){
         $project1[]=$project_result;
    }
     
    return $project1;
     
  }



  public function Select_Proverbs($table){

     $proverb_arr=array();
     $proverb="SELECT * FROM $table";
     $proverb_sql=mysqli_query($this->connection,$proverb);
      while($proverb_results=mysqli_fetch_assoc($proverb_sql)){
  
       $proverb_arr[]=$proverb_results;
      }
  
  return $proverb_arr;
  }


public function Treature_Posts($table,$id){

   $treature_arr=array();
   $treature="SELECT * FROM $table WHERE treature_id=$id ORDER BY post_id DESC";
   $treature_sql=mysqli_query($this->connection,$treature);
    while($treature_results=mysqli_fetch_assoc($treature_sql)){

     $treature_arr[]=$treature_results;
    }

return $treature_arr;


}



public function Problem_Posts($table,$id){

     $trend_arr=array();
     $trends="SELECT * FROM $table WHERE trend_id=$id ORDER BY post_id ASC";
     $trend_sql=mysqli_query($this->connection,$trends);
      while($trend_results=mysqli_fetch_assoc($trend_sql)){
  
       $trend_arr[]=$trend_results;
      }
  
  return $trend_arr;
  
  
  }




  public function Read_More_Treatures($table,$id){

     $read_arr=array();
     $reads="SELECT * FROM $table WHERE post_id=$id";
     $read_sql=mysqli_query($this->connection,$reads);
      while($read_results=mysqli_fetch_assoc($read_sql)){
  
       $read_arr[]=$read_results;
      }
  
  return $read_arr;
  
  
  }


  
  public function Read_More_Problems($table,$id){

     $read_arr1=array();
     $reads1="SELECT * FROM $table WHERE post_id=$id";
     $read_sql1=mysqli_query($this->connection,$reads1);
      while($read_results1=mysqli_fetch_assoc($read_sql1)){
  
       $read_arr1[]=$read_results1;
      }
  
  return $read_arr1;
  
  
  }


//   public function Insert_Trend_Comment($table,$input){
        
//      $sql2="";
//      $sql2="INSERT INTO ".$table;
//      $sql2.="(".implode(",",array_keys($input)).") VALUES ";
//      $sql2.="('".implode("','",array_values($input))."')" ;

//      $query2=mysqli_query($this->connection,$sql2);

//      if($query2){
//        return true;
//      }
//   }


  
//   public function Insert_Treature_Comment($table,$input){
        
//      $sql2="";
//      $sql2="INSERT INTO ".$table;
//      $sql2.="(".implode(",",array_keys($input)).") VALUES ";
//      $sql2.="('".implode("','",array_values($input))."')" ;

//      $query2=mysqli_query($this->connection,$sql2);

//      if($query2){
//        return true;
//      }
//   }


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


 public function Select_Address($table){
      $address_arr=array();
      $address="SELECT * FROM $table ";
      $address_query=mysqli_query($this->connection,$address);
     while($row=mysqli_fetch_assoc($address_query)){
     $address_arr[]=$row;
      }
      return $address_arr;
 }
 
 public function Select_About($table){
     $about_arr=array();
     $about_sql="SELECT * FROM $table ";
     $about_query=mysqli_query($this->connection,$about_sql);
    while($row11=mysqli_fetch_assoc($about_query)){
    $about_arr[]=$row11;
     }
     return $about_arr;
}



 
 
}

$object1=new OOP();

if(isset($_POST['subscribe'])){

     $email=$_POST['email'];
     $sub="SELECT * FROM subscribe WHERE email='$email'";
     $query0=mysqli_query($object1->connection,$sub);
     $row=mysqli_num_rows($query0);
     if($row > 0){

      header('Location:index.php?msgg=You Have Already Subscribed!');

     }
     else{
             $time=date("Y-m-d H:i:s");
               $subscribe=array(
               "email"=>$email,
               "subscribed_time"=>$time
              );

               if($object1->Subscribe_User("subscribe",$subscribe)){
                    header('Location:index.php');
               }
        }

}


// if(isset($_POST['send'])){
//      $dicuss=array();
//     $name= $_POST['name'];
//     $feedback= $_POST['feedback'];
//     $time=date("Y-m-d H:i:s");
//     $dicuss=array(
//            "name"=>$name,
//            "feedback"=>$feedback,
//            "commented_time"=>$time
          
//     );
//     if($object1->Insert_Comment("comment",$dicuss)){
//          header('Location:../index.php?cmt=Success!');
//     }


// }

// if(isset($_POST['trend_comment'])){

//      $post_id=$_GET['post_id'];
       
//      $sql_post="SELECT * FROM problem_post_list WHERE post_id=$post_id";
//      $sql_query=mysqli_query($object1->connection,$sql_post);
//      $row_name=mysqli_fetch_assoc($sql_query);
//      $post_category=$row_name['post_titles'];
//      $trend_id=$row_name['trend_id'];

      
//      $comment=array();
//      $category=$_GET['title'];
//      $post_comment=$_POST['comment'];
//      $time=date("Y-m-d H:i:s");
//      $comment=array(
//           "trend_id"=>$trend_id,
//           "post_id"=>$post_id,
//           "post_categories"=>$post_category,
//           "comments"=>$post_comment,
//           "commented_time"=>$time
//      );
//      if($object1->Insert_Trend_Comment("trend_comment",$comment)){
//           header("Location:../readmore_trend.php?trend_id=$trend_id&msg=Success&post_id=$post_id");
//      }

// }


// if(isset($_POST['treature_comment'])){

//      $post_id=$_GET['post_id'];
       
//      $sql_post="SELECT * FROM treature_post_list WHERE post_id=$post_id";
//      $sql_query=mysqli_query($object1->connection,$sql_post);
//      $row_name=mysqli_fetch_assoc($sql_query);
//      $post_category=$row_name['post_titles'];
//      $treature_id=$row_name['treature_id'];

      
//      $comment=array();
//      $category=$_GET['title'];
//      $post_comment=$_POST['comment'];
//      $time=date("Y-m-d H:i:s");
//      $comment=array(
//           "post_id"=>$post_id,
//           "treature_id"=>$treature_id,
//           "post_categories"=>$post_category,
//           "comments"=>$post_comment,
//           "commented_time"=>$time
//      );
//      if($object1->Insert_Treature_Comment("treature_comment",$comment)){
//           header("Location:../readmore_treatures.php?treature_id=$treature_id&msg=Success&post_id=$post_id");
//      }

// }



?>