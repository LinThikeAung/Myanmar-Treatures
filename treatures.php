<?php  include_once "treaturesite/header.php"   ?>
  <!-- Navigation -->
 <?php    include_once "treaturesite/nav.php" ?>
  

<div class="container-fluid">
      <br><br>

            <div class="row align-items-center my-5">
            <?php
            $treature_id=$_GET['treature_id'];
            $summary_post=$object1->Select_Summary("tasks",$treature_id);
             foreach($summary_post as $summary_posts){
             ?>
          
                <div class="col-lg-5">
                <a href="title_image/<?php  echo $summary_posts['image'] ?>">  <img class="img-fluid rounded mb-4 mb-lg-0" width="400px" height="300px" src="title_image/<?php  echo $summary_posts['image'] ?>" alt=""></a>
                </div>
                <div class="col-lg-7">
                  <h4 class="font-weight-light zawgyi unicode"><?php echo $summary_posts['title'] ?></h4>
                
                  <br><br>
                  <p class="zawgyi unicode"><?php echo $summary_posts['summary'] ?>
                  <br>
                  <?php 
                  if(!empty($summary_posts['video'])){
                  ?>
                 <a href="title_video/<?php echo $summary_posts['video'] ?>" class="btn-link">short video >>>>>></a></p>

                  <?php
                  }
                  else {

                    echo "<p>No video!</p>";
                  
                  } ?>
                </div>
                <?php
             }

            ?> 
            </div>
         
            <hr>

            <?php
            $id=$_GET['treature_id'];
            $allposts=$object1->Treature_Posts("treature_post_list",$id);

     if(count($allposts) == 0) {
        echo "<p class='alert alert-info'>No Post</p>";
     }
      else{
     ?>
         <?php        
            foreach ($allposts as $allpost){
            $image_count=count(unserialize($allpost['post_images']));

            echo $image_count;
            $post_id=$allpost['post_id'];
            $title=$allpost['post_titles'];
            $description=$allpost['post_descriptions'];
            $posted_time=$allpost['posted_time'];
        if($image_count >= 4){
          ?>
         <div class="row" >
                  <div class="col-md-12">
                    <div class="card text-white" >
                      <div class="card-body" style="background-image: -webkit-linear-gradient(0deg, #e66587 0%, #f09458 100%);">
                        <h2 class="card-title text-white zawgyi unicode"><?php echo $title ?></h2>&nbsp;  <small class="text-white"><?php echo $posted_time ?></small>
                        <p class="card-text zawgyi unicode text-white"><?php  echo substr($description,0,700);
                                                echo strlen($description)>700 ? '. . . . . .': ''; ?><a href="readmore_treatures.php?treature_id=<?php echo $_GET['treature_id'] ?> &post_id=<?php echo $post_id ?>" class="text-dark">read more</a></p>
                  <div class="row ">
                        <a href="post_image/<?php  echo unserialize($allpost['post_images'])[0]?>" class="col-md-3 col-sm-12 col-xs-12 col-lg-3  my-1"><img src="post_image/<?php  echo unserialize($allpost['post_images'])[0]?>" style="width:100%;height:100%;"    alt=""></a>
                        <a href="post_image/<?php  echo unserialize($allpost['post_images'])[1]?>" class="col-md-3 col-sm-12 col-xs-12 col-lg-3  my-1"><img src="post_image/<?php  echo unserialize($allpost['post_images'])[1]?>" style="width:100%;height:100%;"    alt=""></a>
                        <a href="post_image/<?php  echo unserialize($allpost['post_images'])[2]?>" class="col-md-3 col-sm-12 col-xs-12 col-lg-3  my-1"><img src="post_image/<?php  echo unserialize($allpost['post_images'])[2]?>"  style="width:100%;height:100%;"    alt=""></a>
                        <a href="post_image/<?php  echo unserialize($allpost['post_images'])[3]?>" class="col-md-3 col-sm-12 col-xs-12 col-lg-3  my-1"><img src="post_image/<?php  echo unserialize($allpost['post_images'])[3]?>"  style="width:100%;height:100%;"    alt=""></a>
                        </div>
        
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
                        <h2 class="card-title text-white zawgyi unicode"><?php echo $title ?></h2> &nbsp;  <small class="text-white"><?php echo $posted_time ?></small>
                        <p class="card-text zawgyi unicode text-white"><?php  echo substr($description,0,700);
                                                echo strlen($description)>700 ? '. . . . . .': ''; ?><a href="readmore_treatures.php?treature_id=<?php echo $_GET['treature_id'] ?> &post_id=<?php echo $post_id ?>" class="text-dark">read more</a></p>
                        <div class="row">
                          <a href="post_image/<?php  echo unserialize($allpost['post_images'])[0]?>" class="col-md-4 col-sm-12 col-xs-12 col-lg-4 my-1">  <img src="post_image/<?php  echo unserialize($allpost['post_images'])[0]?>"  style="width:100%;height:100%;" alt=""></a>
                          <a href="post_image/<?php  echo unserialize($allpost['post_images'])[1]?>" class="col-md-4 col-sm-12 col-xs-12 col-lg-4 my-1">  <img src="post_image/<?php  echo unserialize($allpost['post_images'])[1]?>"  style="width:100%;height:100%;" alt=""></a>
                          <a href="post_image/<?php  echo unserialize($allpost['post_images'])[2]?>" class="col-md-4 col-sm-12 col-xs-12 col-lg-4 my-1">  <img src="post_image/<?php  echo unserialize($allpost['post_images'])[2]?>"  style="width:100%;height:100%;" alt=""></a>
                      </div>
                          </div>
                  </div>
            </div>

     </div><hr>
        <?php  } ?>
      <?php }?>
        <?php } ?>
   
 

 <?php include_once "treaturesite/address.php" ?>
 <?php  include_once "treaturesite/footer.php" ?>