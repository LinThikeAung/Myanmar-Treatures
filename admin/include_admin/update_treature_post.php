
     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
              <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                      <i class="fa fa-list"></i> Treature Post
                  </div>
                <div class="card-body">
                <br><br>

                <?php     
                
                $treature_edit=$obj->Select_Update_Treature_Posts("treature_post_list",$_GET['treature_update']);
                foreach($treature_edit as $treature){

                ?>
            
                  <form method="post"  enctype="multipart/form-data" class="zawgyi unicode">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                        <label class="bmd-label-floating">Post Title</label>
                                        <input type="text" class="form-control" value="<?php echo $treature['post_titles'] ?>" name="title" >
                                </div>
                            </div>
                        </div>
                        <br>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                            <div class="fileinput fileinput-new text-left" data-provides="fileinput">

                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image[]" multiple />
                                        </span><br>

                                        <?php  $image_count=count(unserialize($treature['post_images']));
                                      
                                           if($image_count==1){
                                            ?>
                                            <img src="../post_image/<?php echo unserialize($treature['post_images'])[0] ?>" width="100px" height="100px" alt="">
                                            <?php
                                           }
                                           ?>
                                           <?php
                                           if($image_count== 2){
                                            ?>
                                            <img src="../post_image/<?php echo unserialize($treature['post_images'])[0] ?>" width="100px" height="100px" alt="">
                                            <img src="../post_image/<?php echo unserialize($treature['post_images'])[1] ?>" width="100px" height="100px" alt="">

                                            <?php
                                           }
                                           ?>

                                           <?php
                                           if($image_count==3){
                                            ?>
                                            <img src="../post_image/<?php echo unserialize($treature['post_images'])[0] ?>" width="100px" height="100px" alt="">
                                            <img src="../post_image/<?php echo unserialize($treature['post_images'])[1] ?>" width="100px" height="100px" alt="">
                                            <img src="../post_image/<?php echo unserialize($treature['post_images'])[2] ?>" width="100px" height="100px" alt="">
                                             
                                            <?php
                                           }
                                           ?>
                                           <?php
                                           if($image_count>=4){
                                            ?>
                                            <img src="../post_image/<?php echo unserialize($treature['post_images'])[0] ?>" width="100px" height="100px" alt="">
                                            <img src="../post_image/<?php echo unserialize($treature['post_images'])[1] ?>" width="100px" height="100px" alt="">
                                            <img src="../post_image/<?php echo unserialize($treature['post_images'])[2] ?>" width="100px" height="100px" alt="">
                                            <img src="../post_image/<?php echo unserialize($treature['post_images'])[3] ?>" width="100px" height="100px" alt="">

                                            <?php
                                           }


                                          ?>

                               
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                    <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                        <label class="bmd-label-floating">Post Information</label>
                                  <textarea name="information" class="form-control" id="" cols="30" rows="10"><?php echo $treature['post_descriptions'] ?></textarea>                               
                             </div>
                            </div>
                        </div>
                      
                        
                
              
                    <div class="form-group">
                        <input type="submit" class="btn btn-info pull-left" name="update_treature_post"  value="Update Post">
                        <div class="clearfix"></div>
                    </div>
                  </form>
                  <?php
                }
                
                
                
                ?>
                </div>
              </div>
            </div>
         </div>
        </div> 
    </div>
    </div>
    <?php include_once "include_admin/footer.php" ?>