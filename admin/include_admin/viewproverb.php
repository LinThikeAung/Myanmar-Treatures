<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <a href="proverbs.php?proverb=<?php echo "insert_proverb" ?>" class="btn btn-info"><i class="fa fa-plus fa-2x"></i>&nbsp;New Proverb</a>
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0 zawgyi unicode">Proverbs</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" border="1px solid">
                      <thead class=" text-primary zawgyi unicode">
                       
                        <th>Region</th>
                        <th>Image</th>
                        <th>First Proverb</th>
                        <th>Second Proverb</th>
                        <th>Operation</th>
                      </thead>
                      <tbody>
                      <?php  
                       
                       $proverb_list=$object->Select_Proverb("proverbs");
                       foreach($proverb_list as $allproverb){
                         ?>
                    <tr class="zawgyi unicode">
                        <td><?php echo $allproverb['religion'] ?></td>
                        <td><img src="../proverb_image/<?php echo $allproverb['image'] ?>" style="border:2px solid gray" width="100px" height="100px" alt=""></td>
                        <td><?php echo $allproverb['first_proverb'] ?></td>
                        <td><?php echo $allproverb['second_proverb'] ?></td>
                       
                        <td><a onclick= "javaScript: return confirm('Are you sure to delete?')" href="include_admin/function.php?delete_proverb=<?php  echo $allproverb['id'] ?>"><i class="fa fa-trash fa-2x"></i></a>&nbsp;&nbsp;
                       <a href="proverbs.php?proverb=<?php echo 'update_proverb' ?>&proverb_id=<?php echo $allproverb['id'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                    </td>
                    </tr>
                       <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
                </div>
              </div>
          </div>
            
        
       
      