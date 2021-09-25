
     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
              <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                      <i class="fa fa-list zawgyi unicode"></i> Problems Posts
                  </div>
                <div class="card-body">
                <br><br>
                  <form method="post"  enctype="multipart/form-data" class="zawgyi unicode">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                        <label class="bmd-label-floating">Post Title</label>
                                        <input type="text" class="form-control" name="title" >
                                </div>
                            </div>
                        </div>
                        <br>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                            <div class="fileinput fileinput-new text-left" data-provides="fileinput">
                            <?php if(isset($_GET['msg'])): ?>
                                    <p class="text-danger"><?php echo $_GET['msg'] ?></p>
                                   <?php endif; ?>
                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                            <span class="fileinput-new">Select Three</span>
                                            <span class="fileinput-exists">Images</span>
                                            <input type="file" name="image[]" multiple />
                                        </span>
                               
                            </div>
                        </div>
                      </div>
                    </div>
                  <br>
                    <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                        <label class="bmd-label-floating">Post Information</label>
                                  <textarea name="information" class="form-control" id="" cols="30" rows="10"></textarea>                               
                             </div>
                            </div>
                        </div>
                      
                        
                
              
                    <div class="form-group">
                        <input type="submit" class="btn btn-info pull-left" name="new_problem"  value="Add New Post">
                        <div class="clearfix"></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
         </div>
        </div> 
    </div>
    <?php include_once "include_admin/footer.php" ?>