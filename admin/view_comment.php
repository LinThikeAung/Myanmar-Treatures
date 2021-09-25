<?php include_once "include_admin/header.php" ?>
<?php  include_once "include_admin/function.php" ?>
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="black" data-image="assets/img/sidebar-2.jpg">
   
      <div class="logo">
        <a href="" class="simple-text logo-normal">
         <?php echo $_SESSION['name']; ?>
        </a>
      </div>
         <?php include_once "include_admin/dashboard.php" ?>
    </div>

    <div class="main-panel">
      <?php include_once "include_admin/nav.php" ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <?php 
                     if(isset($_GET['comment_id'])){
                          $comment_id=$_GET['comment_id'];
                          $comment_data=$obj->View_Comment("comment",$comment_id);
                         if(empty($comment_data)){
                            
                          echo "<p class='alert alert-default' style='color:red'>Deleted!</p>";
                   
                         } 
                         
                         else{ ?>
                    <div class="card">
                    <div class="card-body">
                    <?php
                        
                          foreach($comment_data as $comment_data){
                     ?>
                      <h6 class=""><?php echo $comment_data['name'] ?>&nbsp;<small><?php echo $comment_data['commented_time'] ?></small></h6>
                      <p class="alert"><?php echo $comment_data['feedback'] ?></p>
                      <a  onclick= "javaScript: return confirm('Are you sure to delete?')" href="include_admin/function.php?delete=<?php  echo $comment_data['id'] ?>" class="btn btn-danger"><i class="fa fa-trash fa-2x"></i>&nbsp;Delete</a>

                     <?php
                     }
                    }
                     $obj->Update_Notification("comment",$comment_id);
                     }
                     ?>
                     
                     

               
                   
                     <!-- for trend comment list -->
                     <?php
                   
                   if(isset($_GET['trend_cmt'])) {



                    
                      $per_page=5;
                      if(isset($_GET['page'])){
        
                          $page=$_GET['page'];
                      }
                      else{
        
                        $page="";
        
                      }
        
                        if($page==""){
                            $page_start=0;
                          }
                          else{
                        $page_start=($page*5)-5;
        
                          }
                      

                      $trend_cmt=$_GET['trend_cmt'];
                      $comment_data=$obj->View_Post_Comment("trend_comment",$trend_cmt,$page_start,$per_page);

                      if(empty($comment_data)){
                            
                        echo "<p class='alert alert-default' style='color:red'>No Comment!</p>";
                 
                       } 
                       
                       else{ ?>


                         <div class="card">
                         <div class="card-body" id="cardbox">
                    <?php
                      foreach($comment_data as $comment_data){
                    ?>
                       
                      <div id="cardbox<?php echo $comment_data['comment_id'] ?>">
                      <h6 class=""><?php echo $comment_data['post_categories'] ?>&nbsp;<small><?php echo $comment_data['commented_time'] ?></small></h6>
                      <p class="alert"><?php echo $comment_data['comments'] ?></p>
                      <!-- href="include_admin/function.php?trend_cmt_delete=<?php // echo $comment_data['comment_id']?>&trend_cmt1=<?php// echo $_GET['trend_cmt'] ?> -->
                      <button type="button" id="cardbox" onclick="Delete(<?php echo $comment_data['comment_id'];?>)"  class="btn btn-danger"><i class="fa fa-trash fa-2x"></i>&nbsp;Delete</button>
                      <br>
                      <hr style="border:dotted black 2px">
                      </div>
                    <?php
                        }
                        }
                        


                      
                          ?>


                    <?php

                    $trend_pagination=$obj->Pagination_Trend_Comment("trend_comment",$_GET['trend_cmt']);

                    $comment_count=count($trend_pagination);
                    //echo $comment_count;
                    $page_count=ceil($comment_count/5);

                    ?>  

<!-- Pager -->


  
                  <ul class="pagination justify-content-center">
                    
                  <?php        
                  for($i=1;$i<=$page_count;$i++)
                      {
                      ?>
                        <li class="page-item" style="background-color:skyblue;border:solid white 1px"><a class="page-link"  style="color:black"  href="view_comment.php?page=<?php echo $i ?>&trend_cmt=<?php echo $_GET['trend_cmt'] ?>"><?php echo $i ;?></a></li>
                  <?php
                      }
                  ?>
                  </ul>  
                    <?php }?>
                     <!--ending for trend comment list -->





                     <!-- for treature_comment -->

                      
                     <?php
                   
                   if(isset($_GET['treature_cmt'])) {



                    
                      $per_page=5;
                      if(isset($_GET['page'])){
        
                          $page=$_GET['page'];
                      }
                      else{
        
                        $page="";
        
                      }
        
                        if($page==""){
                            $page_start=0;
                          }
                          else{
                        $page_start=($page*5)-5;
        
                          }
                      

                      $treature_cmt=$_GET['treature_cmt'];
                      $comment_data=$obj->View_Post_Comment("treature_comment",$treature_cmt,$page_start,$per_page);

                      if(empty($comment_data)){
                            
                        echo "<p class='alert alert-default' style='color:red'>No Comment!</p>";
                 
                       } 
                       
                       else{ ?>


                         <div class="card">
                         <div class="card-body" id="cardbox">
                    <?php
                      foreach($comment_data as $comment_data){
                    ?>
                       
                      <div id="cardbox<?php echo $comment_data['comment_id'] ?>">
                      <h6 class=""><?php echo $comment_data['post_categories'] ?>&nbsp;<small><?php echo $comment_data['commented_time'] ?></small></h6>
                      <p class="alert"><?php echo $comment_data['comments'] ?></p>
                      <!-- href="include_admin/function.php?trend_cmt_delete=<?php // echo $comment_data['comment_id']?>&trend_cmt1=<?php// echo $_GET['trend_cmt'] ?> -->
                      <button type="button" id="cardbox" onclick="Delete(<?php echo $comment_data['comment_id'];?>)"  class="btn btn-danger"><i class="fa fa-trash fa-2x"></i>&nbsp;Delete</button>
                      <br>
                      <hr style="border:dotted black 2px">
                      </div>
                    <?php
                        }
                        }
                        


                      
                          ?>


                    <?php

                    $trend_pagination=$obj->Pagination_Trend_Comment("treature_comment",$_GET['treature_cmt']);

                    $comment_count=count($trend_pagination);
                    //echo $comment_count;
                    $page_count=ceil($comment_count/5);

                    ?>  

<!-- Pager -->


  
                  <ul class="pagination justify-content-center">
                    
                  <?php        
                  for($i=1;$i<=$page_count;$i++)
                      {
                      ?>
                        <li class="page-item" style="background-color:skyblue;border:solid white 1px"><a class="page-link"  style="color:black"  href="view_comment.php?page=<?php echo $i ?>&treature_cmt=<?php echo $_GET['treature_cmt'] ?>"><?php echo $i ;?></a></li>
                  <?php
                      }
                  ?>
                  </ul>  
                    <?php }?>
           

                     <!-- ending for treature_comment -->
                  
                 </div>
              </div>
            </div>
          </div>
        </div>
       </div>
       <?php include_once "include_admin/footer.php" ?>
      </div>
      </div>
     
  	<script type="text/javascript">

 function Delete(id){
      var id=id;
      if(confirm("Are u sure you want to delete this comment?")){


        $.ajax({
				type:'POST',
				url:"include_admin/delete_trend_cmt.php?id=" + id,
       // data:({ id : id }),
        cache:false,
        success: function (html){
            $("#cardbox"+id).fadeOut('Slow');
           
				}
      });
      // var form=document.getElementById('cardbox').reset();
		  //     	return false;

      }
      else{
        return false;
      }
    }
  

	
</script>