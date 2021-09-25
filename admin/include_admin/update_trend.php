
     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
              <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                      <i class="fa fa-tasks"></i> Edit Trends
                  </div>
                <div class="card-body">
                <br><br>
                  <form method="post" enctype="multipart/form-data" class="zawgyi unicode">
                  <?php
                
                if(isset($_GET['update_trend'])){

                $update_id=$_GET['update_trend'];
                $trends=$obj->Select_Update_Trend("tasks",$update_id);
                
                foreach ($trends as $trend) {
                ?>

              
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                        <label class="bmd-label-floating">Title</label>
                                        <input type="text" class="form-control" name="title" value="<?php echo $trend['title'] ?>">
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
                                        <img src="../trend_image/<?php echo $trend['image'] ?>"width="100px" height="100px">

                               
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
                                        <a href="../trend_video/<?php echo $trend['video'] ?>" style="color:blue" class="btn btn-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;video>>></a>

                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Description</label>
                                <textarea name="content" id="" class="form-control" cols="30" rows="5">
                                <?php echo $trend['summary'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info pull-left" name="update_trend"  value="Update">
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