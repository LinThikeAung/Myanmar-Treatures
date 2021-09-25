
     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
              <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                      <i class="fa fa-tasks"></i> Edit Treatures
                  </div>
                <div class="card-body">
                <br><br>
                  <form method="post" enctype="multipart/form-data" class="zawgyi unicode">
                  <?php
                
                if(isset($_GET['update_treature'])){

                $update_id=$_GET['update_treature'];
                $treatures=$obj->Select_Update_Treature("tasks",$update_id);
                
                foreach ($treatures as $treature) {
                ?>

              
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                        <label class="bmd-label-floating">Title</label>
                                        <input type="text" class="form-control " name="title" value="<?php echo $treature['title'] ?>">
                                </div>
                            </div>
                        </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class="fileinput fileinput-new text-left" data-provides="fileinput">

                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                            <span class="fileinput-new">Select Treature</span>
                                            <span class="fileinput-exists">Image</span>
                                            <input type="file" name="image" />
                                        </span>
                                        <img src="../title_image/<?php echo $treature['image'] ?>"width="100px" height="100px">

                               
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class="fileinput fileinput-new text-left" data-provides="fileinput">

                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                            <span class="fileinput-new">Select Short</span>
                                            <span class="fileinput-exists">Video</span>
                                            <input type="file" name="video" />
                                        </span>
                                        <a href="../title_video/<?php echo $treature['video'] ?>" style="color:blue" class="btn btn-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;video>>></a>

                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Description</label>
                                <textarea name="content" id="" class="form-control" cols="30" rows="5">
                                <?php echo $treature['summary'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info pull-left" name="update_treature"  value="Update">
                        <div class="clearfix"></div>
                    </div>
                    <?php
                }

                }
                
                ?>
                  </form>
             
                </div>
              </div>
              </div>
            </div>
         </div>
        </div> 
    </div>