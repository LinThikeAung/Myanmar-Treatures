<div class="content">
<div class="container-fluid">
    <div class="row">
        <?php
            $treature_post_id=$_GET['treature_update'];
            $updatepost=$obj->Select_Update_Treature_Posts("treature_post_list",$treature_post_id);
           
            foreach ($updatepost as $allpost){
             
            $image_count=count(unserialize($allpost['post_images']));
            $post_id=$allpost['post_id'];
            $title=$allpost['post_titles'];
            $description=$allpost['post_descriptions'];
            $posted_time=$allpost['posted_time'];
           
        if($image_count >= 4){
          ?>

     

       
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body zawgyi unicode" style="background-color:wheat">
                        <h2 class="card-title zawgyi unicode"><?php echo $title ?> </h2> &nbsp;  <small><?php echo $posted_time ?></small>
                        <p class="card-text zawgyi unicode">
                        <?php echo $description ?>
                        <div class="row">
                        <a href="../post_image/<?php  echo unserialize($allpost['post_images'])[0]?>" class="col-md-3 col-sm-12 col-xs-12 col-lg-3  my-1"><img src="../post_image/<?php  echo unserialize($allpost['post_images'])[0]?>" style="width:100%;height:100%;"    alt=""></a>
                        <a href="../post_image/<?php  echo unserialize($allpost['post_images'])[1]?>" class="col-md-3 col-sm-12 col-xs-12 col-lg-3  my-1"><img src="../post_image/<?php  echo unserialize($allpost['post_images'])[1]?>" style="width:100%;height:100%;"    alt=""></a>
                        <a href="../post_image/<?php  echo unserialize($allpost['post_images'])[2]?>" class="col-md-3 col-sm-12 col-xs-12 col-lg-3  my-1"><img src="../post_image/<?php  echo unserialize($allpost['post_images'])[2]?>"  style="width:100%;height:100%;"    alt=""></a>
                        <a href="../post_image/<?php  echo unserialize($allpost['post_images'])[3]?>" class="col-md-3 col-sm-12 col-xs-12 col-lg-3  my-1"><img src="../post_image/<?php  echo unserialize($allpost['post_images'])[3]?>"  style="width:100%;height:100%;"    alt=""></a>
                      
                      </div>
                       
                          </div>
                          <div class="card-footer">
                          <a href="treature_post.php?treature_post=<?php echo 'update_treature_post' ?>&treature_update=<?php echo $_GET['treature_update'] ?>" class="btn btn-info"><i class="fa fa-edit fa-2x"></i>Edit Post</a>
                          <a onclick= "javaScript: return confirm('Are you sure to delete?')" href="include_admin/function.php?treature_update1=<?php echo $_GET['treature_update']?>&back_id=<?php echo $_GET['delete_id'] ?>" class="btn btn-danger"><i class="fa fa-trash fa-2x "></i>Delete</a>

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

      
    
                  <div class="col-md-12">
                    <div class="card" >
                      <div class="card-body" style="background-color:wheat">
                        <h2 class="card-title zawgyi unicode"><?php echo $title ?> </h2>
                        <p class="card-text zawgyi unicode">
                        <?php echo $description ?>
                             
                      <div class="row">
                          <a href="../post_image/<?php  echo unserialize($allpost['post_images'])[0]?>" class="col-md-4 col-sm-12 col-xs-12 col-lg-4 my-1">  <img src="../post_image/<?php  echo unserialize($allpost['post_images'])[0]?>"  style="width:100%;height:100%;" alt=""></a>
                          <a href="../post_image/<?php  echo unserialize($allpost['post_images'])[0]?>" class="col-md-4 col-sm-12 col-xs-12 col-lg-4 my-1">  <img src="../post_image/<?php  echo unserialize($allpost['post_images'])[1]?>"  style="width:100%;height:100%;" alt=""></a>
                          <a href="../post_image/<?php  echo unserialize($allpost['post_images'])[0]?>" class="col-md-4 col-sm-12 col-xs-12 col-lg-4 my-1">  <img src="../post_image/<?php  echo unserialize($allpost['post_images'])[2]?>"  style="width:100%;height:100%;" alt=""></a>
                     </div>
                    </div>
                    <div class="card-footer">
                    <a href="treature_post.php?treature_post=<?php echo 'update_treature_post' ?>&treature_update=<?php echo $_GET['treature_update'] ?>" class="btn btn-info"><i class="fa fa-edit fa-2x"></i>Edit Post</a>
                    <a onclick= "javaScript: return confirm('Are you sure to delete?')" href="include_admin/function.php?treature_update1=<?php echo $_GET['treature_update']?>&back_id=<?php echo $_GET['delete_id'] ?>" class="btn btn-danger"><i class="fa fa-trash fa-2x "></i>Delete</a>

                    </div>
              
                </div>                
      </div>
      <?php  } ?>
      <?php }?>
      </div>
     </div>
      </div>
      <?php  include_once "include_admin/footer.php" ?>
   