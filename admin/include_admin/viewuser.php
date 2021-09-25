
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <a href="user.php?user=<?php echo "insertuser" ?>" class="btn btn-info"><i class="fa fa-plus fa-2x"></i>&nbsp;New User</a>
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0 zawgyi unicode ">Administrators</h4>
                </div>
                <div class="card-body">
             
                  <div class="table-responsive">
                    <table class="table" border="1px">
                      <thead class=" text-primary zawgyi unicode">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Address</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                        <th>Created Time</th>
                     
                      </thead>
                      <tbody>
                   
                    <?php  
                       
                      $user_list=$object->All_Admin("user");
                      foreach($user_list as $alluser){
                        ?>
                      <tr>
                        <td class="zawgyi unicode"><?php echo $alluser['name'] ?></td>
                        <td><?php echo $alluser['email'] ?></td>
                        <td><img src="userimage/<?php echo $alluser['image'] ?>" style="border:2px solid" alt="" width="100px" height="100px"></td>
                        <td class="zawgyi unicode"><?php echo $alluser['address'] ?></td>
                        <td><a href="send_email.php?user_id=<?php echo $alluser['id'] ?>" class="fa fa-send">&nbsp;Email</a></td>
                        <td><?php echo $alluser['phone'] ?></td>
                        <td> <?php echo $alluser['created_time'] ?></td>
                     
                    </tr>
                        <?php
                         }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    