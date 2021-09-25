<?php  include_once "treaturesite/header.php"   ?>
  <!-- Navigation -->
 <?php    include_once "treaturesite/nav.php" ?>
 

<div class="container-fluid">
      <br><br>

            <div class="row align-items-center my-5">
            <?php
            $trend_id=$_GET['trend_id'];
            $summary_post=$object1->Select_Summary("tasks",$trend_id);


   
             
             foreach($summary_post as $summary_posts){
             ?>
          
                <div class="col-lg-5">
                <a href="trend_image/<?php  echo $summary_posts['image'] ?>">  <img class="img-fluid rounded mb-4 mb-lg-0" width="400px" height="300px" src="trend_image/<?php  echo $summary_posts['image'] ?>" alt=""></a>
                </div>
                <div class="col-lg-7">
                  <h4 class="font-weight-light zawgyi unicode"><?php echo $summary_posts['title'] ?></h4>
                
                  <br><br>
                  <p class="zawgyi unicode"><?php echo $summary_posts['summary'] ?>
                  <br>
                  <a href="trend_video/<?php echo $summary_posts['video'] ?>" class="btn-link">short video>>>>></a>
                </div>
                <?php
             }

            ?> 
            </div>
         
            <hr>

            <?php
            $id=$_GET['post_id'];
            $allposts=$object1->Read_More_Problems("problem_post_list",$id);


            
     if(count($allposts) == 0) {
        echo "<p class='alert alert-info'>No Post</p>";
     }
      else{
     ?>
              <?php        
            foreach ($allposts as $allpost){
             
            $image_count=count(unserialize($allpost['post_images']));
            $post_id=$allpost['post_id'];
            $title=$allpost['post_titles'];
            $description=$allpost['post_descriptions'];
            $posted_time=$allpost['posted_time'];

        if($image_count >= 4){
          ?>

     

         <div class="row" >
                  <div class="col-md-12">
                    <div class="card" >
                      <div class="card-body" style="background-image: -webkit-linear-gradient(0deg, #e66587 0%, #f09458 100%);">
                        <h2 class="card-title zawgyi text-white unicode"><?php echo $title ?></h2>&nbsp;  <small class="text-white"><?php echo $posted_time ?></small>
                        <p class="card-text zawgyi unicode text-white" style="line-height:2rem"><?php echo $description ?>   </p>     
                        <div class="row">
                        <a href="post_image/<?php  echo unserialize($allpost['post_images'])[0]?>" class="col-md-3 col-sm-12 col-xs-12 col-lg-3  my-1"><img src="post_image/<?php  echo unserialize($allpost['post_images'])[0]?>" style="width:100%;height:100%;"    alt=""></a>
                        <a href="post_image/<?php  echo unserialize($allpost['post_images'])[1]?>" class="col-md-3 col-sm-12 col-xs-12 col-lg-3  my-1"><img src="post_image/<?php  echo unserialize($allpost['post_images'])[1]?>" style="width:100%;height:100%;"    alt=""></a>
                        <a href="post_image/<?php  echo unserialize($allpost['post_images'])[2]?>" class="col-md-3 col-sm-12 col-xs-12 col-lg-3  my-1"><img src="post_image/<?php  echo unserialize($allpost['post_images'])[2]?>"  style="width:100%;height:100%;"    alt=""></a>
                        <a href="post_image/<?php  echo unserialize($allpost['post_images'])[3]?>" class="col-md-3 col-sm-12 col-xs-12 col-lg-3  my-1"><img src="post_image/<?php  echo unserialize($allpost['post_images'])[3]?>"  style="width:100%;height:100%;"    alt=""></a>
                         </div>
                       
                          </div>
                      <div class="card-footer" style="background-image: -webkit-linear-gradient(0deg, #e66587 0%, #f09458 100%);" >
                      <form action="" id="trendbox" onsubmit="return formTrend(<?php echo $post_id ?>);" method="post">
                          
                          <h5 id="success_msg"></h5>
                               <div class="form-group">
                               <textarea class="single-textarea" name="comment"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                               </div>
                               <div class="form-group">
                               <input type="submit" name="treature_comment" value="Send" class="genric-btn success-border radius">
                               </div>
                               </form> 


                  
                    </div>
                  </div>
                </div>
          </div>
          <hr>

       <?php
            }
          
          
            ?>

          
   

      <?php
        if($image_count == 3){
          ?>

          <div class="row" >
                  <div class="col-md-12">
                    <div class="card" >
                      <div class="card-body" style="background-image: -webkit-linear-gradient(0deg, #e66587 0%, #f09458 100%);">
                        <h2 class="card-title zawgyi text-white unicode"><?php echo $title ?></h2> &nbsp;  <small class="text-white"><?php echo $posted_time ?></small>
                        <p class="card-text zawgyi unicode text-white" style="line-height:2rem"><?php  echo $description ?> </p>
                              
                        <div class="row">
                        <a href="post_image/<?php  echo unserialize($allpost['post_images'])[0]?>" class="col-md-4 col-sm-12 col-xs-12 col-lg-4 my-1">  <img src="post_image/<?php  echo unserialize($allpost['post_images'])[0]?>"  style="width:100%;height:100%;" alt=""></a>
                          <a href="post_image/<?php  echo unserialize($allpost['post_images'])[0]?>" class="col-md-4 col-sm-12 col-xs-12 col-lg-4 my-1">  <img src="post_image/<?php  echo unserialize($allpost['post_images'])[1]?>"  style="width:100%;height:100%;" alt=""></a>
                          <a href="post_image/<?php  echo unserialize($allpost['post_images'])[0]?>" class="col-md-4 col-sm-12 col-xs-12 col-lg-4 my-1">  <img src="post_image/<?php  echo unserialize($allpost['post_images'])[2]?>"  style="width:100%;height:100%;" alt=""></a>
                      </div>
                       
                          </div>
                      <div class="card-footer" style="background-image: -webkit-linear-gradient(0deg, #e66587 0%, #f09458 100%);"> 
                      <form action="" id="trendbox" onsubmit="return formTrend(<?php echo $post_id ?>);" method="post">
                          
                          <h5 id="success_msg"></h5>
                               <div class="form-group">
                               <textarea class="single-textarea" name="comment"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                               </div>
                               <div class="form-group">
                               <input type="submit" name="treature_comment" value="Send" class="genric-btn success-border radius">
                               </div>
                               </form>  </div>
                  </div>
            </div>

     </div><hr>
        <?php  } ?>
      <?php }?>
        <?php } ?>
   
 

 <?php include_once "treaturesite/address.php" ?>
 <?php  include_once "treaturesite/footer.php" ?>
 <script src="like_script.js"> </script>