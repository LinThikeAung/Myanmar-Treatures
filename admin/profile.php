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
          <div class="row">
              <?php
                        $login_user=$_SESSION['name'];
                        $session_user=$object->Select_Profile("user","$login_user");
                        foreach ($session_user as $profile_admin) {
                       
                         ?>
            <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                      <i class="fa fa-user fa-2x"></i> Profile
                  </div>
                <div class="card-body">
                        <br><br>
                        <form method="post" class="zawgyi unicode" action="include_admin/function.php?user_id=<?php echo $profile_admin['id'] ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                                <div class="form-group">
                                                        <label class="bmd-label-floating ">Name</label>
                                                        <input type="text" class="form-control zawgyi unicode" value="<?php echo $profile_admin['name'] ?>" name="name" >
                                                </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="fileinput fileinput-new text-left" data-provides="fileinput">

                                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="image" />
                                                        </span>
                                                        <img src="userimage/<?php echo $profile_admin['image'] ?>" alt="" style="border:1px solid" width="210px" height="100px">

                                                </div>
                                            </div>
                                    </div>
                                </div>
                        <br>
                            <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="">Email</label>
                                                    <input type="email" class="form-control" value="<?php echo $profile_admin['email'] ?>" name="email">
                                            </div>
                                        </div>
                                
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="">Password</label>
                                                    <input type="password" class="form-control" value="<?php echo $profile_admin['password'] ?>" name="password">
                                            </div>
                                        </div>
                                </div>
                                <br>
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="bmd-label-floating">Address</label>
                                                    <input type="text" class="form-control" value="<?php echo $profile_admin['address'] ?>" name="address">
                                            </div>
                                        </div>
                                
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="bmd-label-floating">Phone Number</label>
                                                    <input type="text" class="form-control" value="<?php echo $profile_admin['phone'] ?>" name="phone">
                                            </div>
                                        </div>
                                </div>
                    
                            <div class="form-group">
                                <input type="submit" class="btn btn-info pull-left" name="profile_update"  value="Update">
                            
                                <div class="clearfix"></div>
                            </div>
                        </form>
                 </div>



              </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card">
              <div class="card-body zawgyi unicode">
              <img src="userimage/<?php echo $profile_admin['image'] ?>" class="img-fluid" style="border:2px solid" alt="" height="400px">
            <br> <br>
             <i class="fa fa-user"></i> Name :<?php echo $profile_admin['name'] ?><br>
              <i class="fa fa-envelope"></i> Email:<?php echo $profile_admin['email'] ?><br>
              <i class="fa fa-address-book"></i> Address:<?php echo $profile_admin['address'] ?><br>
             <i class="fa fa-phone"></i>Phone  : <?php echo $profile_admin['phone'] ?> 
              </div>
            </div>
         
         </div>
         <?php
                        }
                        ?>

        </div> 
    </div></div>
   <?php include_once "include_admin/footer.php" ?>