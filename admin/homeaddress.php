<?php include_once "include_admin/header.php" ?>
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="black" data-image="assets/img/sidebar-2.jpg">
  
      <div class="logo">
        <a href="" class="simple-text logo-normal">
        <?php echo $_SESSION['name'] ?>
        </a>
      </div>
         <?php include_once "include_admin/dashboard.php" ?>
    </div>
    <div class="main-panel">
    
    
      <?php include_once "include_admin/nav.php" ?>

      
     <div class="content">
        <div class="container-fluid">
        <?php  $contact=$obj->Select_Address("contactus");
        foreach($contact as $contact_address){
        
        ?>
          <div class="row">
            <div class="col-md-12">
            <div class="card">
            <h4 class="card-header card-header-info"><i class="fa fa-home"></i> Home Site Address</h4>

                <div class="card-body">
                        <br><br>
                        <form method="post" cl action="include_admin/function.php?home_id=<?php echo $contact_address['id'] ?>" enctype="multipart/form-data">
                        <h5>Address</h5>
                                <div class="row">
                               
                                    <div class="col-md-4">
                                                <div class="form-group">
                                                        <label class="bmd-label-floating">Country</label>
                                                        <input type="text" class="form-control" value="<?php echo $contact_address['country'] ?>" name="country" >
                                                </div>
                                    </div>
                                 
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                    <label class="bmd-label-floating">Current Address</label>
                                                    <input type="text" class="form-control" value="<?php echo $contact_address['current_address'] ?>" name="current_address">
                                            </div>
                                        </div>
                                
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                    <label class="bmd-label-floating">Permanent Address</label>
                                                    <input type="text" class="form-control" value="<?php echo $contact_address['permanent_address'] ?>" name="permanent_address">
                                            </div>
                                        </div>
                                </div>
                                <br><br>
                                <h5 >Email Address</h5>
                                <div class="row">
                               
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="bmd-label-floating">First Email</label>
                                                    <input type="text" class="form-control" value="<?php echo $contact_address['first_email'] ?>" name="first_email">
                                            </div>
                                        </div>
                                
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="bmd-label-floating">Second Email</label>
                                                    <input type="text" class="form-control" value="<?php echo $contact_address['second_email'] ?>" name="second_email">
                                            </div>
                                        </div>
                                      
                                </div>
                             <br><br>
                                <h5>Phone Number</h5>
                                <div class="row">
                               
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="bmd-label-floating">First Phone Number</label>
                                                    <input type="text" class="form-control" value="<?php echo $contact_address['first_phone'] ?>" name="first_phone">
                                            </div>
                                        </div>
                                
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="bmd-label-floating">Second Phone Number</label>
                                                    <input type="text" class="form-control" value="<?php echo $contact_address['second_phone'] ?>" name="second_phone">
                                            </div>
                                        </div>
                                      
                                </div>
                    
                            <div class="form-group">
                                <input type="submit" class="btn btn-info pull-left" name="home_update"  value="Update">
                            
                               
                            </div>
                        </form>
                 </div>

            

              </div>
        <?php  } ?>
            </div>
         
         </div>
       
                      

        </div> 
    </div>
   <?php include_once "include_admin/footer.php" ?>