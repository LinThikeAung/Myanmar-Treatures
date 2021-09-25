<div class="content">
<div class="container-fluid">
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-users"></i>
                  </div>

                  <?php 
                  $subscribe=$object->Subscribe_User("subscribe");
                  ?>

                  <p class="card-category">Subscribe</p>
                  <h3 class="card-title">
                    <small><?php  echo $subscribe; ?></small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-comment-o"></i>
                  </div>
                  <?php 
                  $comment=$object->Comments("comment");
                  ?>
                  <p class="card-category">Comment</p>
                  <h3 class="card-title"><?php echo $comment ?></h3>
                </div>
                <div class="card-footer">
                
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-users"></i>
                  </div>
                  <p class="card-category">Sellers</p>
                  <h3 class="card-title">10</h3>
                </div>
                <div class="card-footer">
                 
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-users"></i>
                  </div>
                  <p class="card-category">Admins</p>
                  <h3 class="card-title">7</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  </div>
                </div>
              </div>
            </div>
          </div>
         
         
          </div>
        </div>
