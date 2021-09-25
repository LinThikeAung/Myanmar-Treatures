
     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
              <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                      <i class="fa fa-info"></i> Update Proverbs
                  </div>
                <div class="card-body">
                <br><br>
                <?php
                $proverb_list=$object->Select_Update_Proverbs("proverbs",$_GET['proverb_id']);
                foreach ($proverb_list as $all_proverb) { ?>
               
                  <form method="post"  enctype="multipart/form-data" class="zawgyi unicode">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                        <label class="bmd-label-floating ">Region Proverb</label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $all_proverb['religion'] ?>" >
                                </div>
                            </div>
                        </div>
                        <br>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class="fileinput fileinput-new text-left" data-provides="fileinput">

                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image" />
                                        </span>
                                        <img src="../proverb_image/<?php echo $all_proverb['image'] ?>" width="100px" height="100px" alt="">
                               
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                        <label class="bmd-label-floating">First Proverb</label>
                                        <input type="text" class="form-control" name="first" value="<?php echo $all_proverb['first_proverb'] ?>">
                                </div>
                            </div>
                        </div>
                         <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                        <label class="bmd-label-floating">Second Proverb</label>
                                        <input type="text" class="form-control" name="second" value="<?php echo $all_proverb['second_proverb'] ?>">
                                </div>
                            </div>
                        </div>
                         <br>
                      
                    
              
                    <div class="form-group">
                        <input type="submit" class="btn btn-info pull-left" name="update_proverb"  value="Update">
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