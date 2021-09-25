<?php include_once "include_admin/header.php" ?>
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="black" data-image="assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
         <?php echo $_SESSION['name'] ?>
        </a>
      </div>
         <?php include_once "include_admin/dashboard.php" ?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include_once "include_admin/nav.php" ?>

  
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                 <div class="card-header-info">Project Objectives</div>
              <div class="card-body">
                   
                 <?php   $objective=$obj->Select_Objective("about");

                 foreach($objective as $objective_info){
                     echo $objective_info['objective'];
                     ?>
                 <hr>
                    <form action="" method="post">
                        <div class="form-group">
                            <textarea name="objective" class="form-control" rows="10"><?php echo $objective_info['objective'] ?></textarea>

                        </div>
                       <div class="form-group">
                                <input type="submit" class="btn btn-info pull-left" name="objective_update"  value="Update"> 
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
      
      <?php  include_once "include_admin/footer.php" ?>
      </div>
      </div>