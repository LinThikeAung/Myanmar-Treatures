<?php include_once "include_admin/header.php" ?>
<?php  include_once "include_admin/function.php" ?>
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="black" data-image="assets/img/sidebar-2.jpg">
   
      <div class="logo">
        <a href="" class="simple-text logo-normal">
         <?php echo $_SESSION['name']; ?>
        </a>
      </div>
         <?php include_once "include_admin/dashboard.php" ?>
    </div>

    <div class="main-panel">
      <?php include_once "include_admin/nav.php" ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                  
                  
                  <?php
                    
                    if($_GET['eye']){
                      $eye=$_GET['eye'];
                      $eye_data=$obj->Select_Home_Comment("comment",$eye);
                      
                      if(empty($eye_data)){
                            
                        echo "<p class='alert alert-default' style='color:red'>Deleted!</p>";
                 
                       } 
                       
                       else{ ?>
                      <div class="card">
                     <div class="card-body">
                  <?php
                      
                        foreach($eye_data as $eye_data){
                   ?>
                    <h6 class=""><?php echo $eye_data['name'] ?>&nbsp;<small><?php echo $eye_data['commented_time'] ?></small></h6>
                    <p class="alert alert-info"><?php echo $eye_data['feedback'] ?></p>
                    <a  onclick= "javaScript: return confirm('Are you sure to delete?')" href="include_admin/function.php?delete_eye=<?php  echo $eye_data['id'] ?>" class="btn btn-danger"><i class="fa fa-trash fa-2x"></i>&nbsp;Delete</a>

                   <?php
                   }
                  }
                      
                    }
                    
                    
                    ?>
            
            </div>
              </div>
            </div>
          </div>
        </div>
       </div>
       <?php include_once "include_admin/footer.php" ?>
      </div>
      </div>
     

                    