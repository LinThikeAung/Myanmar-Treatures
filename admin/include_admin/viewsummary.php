<?php include_once "function.php" ?>

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <a href="summary.php?source=<?php echo 'important' ?>" class="btn btn-info"><i class="fa fa-plus fa-2x"></i>&nbsp;New Title</a>
              <div class="card card-plain">
                <div class="card-header card-header-info">
                <?php $sql="SELECT * FROM tasks WHERE status='important'";
                  $query=mysqli_query($object->connection,$sql);
                  
                ?>
                  <h4 class="card-title mt-0 zawgyi unicode ">Current Problem Titles &nbsp;(<?php  echo mysqli_num_rows($query)?>)</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" border="2px solid white">
                      <thead class=" text-primary zawgyi unicode">
                        <th style="width:150px" class="zawgyi unicode">Problem Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Operation</th>

                      </thead>
                      <tbody>
                      <?php
                      $problems=$object->Select_Important("tasks");

                      foreach($problems as $current){
                        ?>
                      
                      <tr>
                        <td class="zawgyi unicode"><?php echo $current['title'] ?></td>
                        <td><img src="../trend_image/<?php  echo $current['image'] ?>" alt="" style="border:2px solid gray" width="100px" height="100px"></td>
                        <td class="zawgyi unicode"><?php echo $current['summary'] ?></td>
                        <td><a onclick= "javaScript: return confirm('Are you sure to delete?')" href="include_admin/function.php?task_trend=<?php echo $current['id'] ?>"><i class="fa fa-trash fa-2x"></i></a>&nbsp;&nbsp;
                       <a href="summary.php?source=<?php echo 'updatetrend'?>&update_trend=<?php echo $current['id'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                    </td>
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
            <div class="col-md-12">
            <a href="summary.php?source=<?php echo 'nine' ?>" class="btn btn-info"><i class="fa fa-plus fa-2x"></i>&nbsp;New Title</a>
            <?php $sql1="SELECT * FROM tasks WHERE status='nine'";
                  $query1=mysqli_query($object->connection,$sql1);
                  
                ?>
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0 class="zawgyi unicode"">Myanmar' Treature Titles &nbsp;(<?php  echo mysqli_num_rows($query1) ?>)</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover" border="2px solid white">
                      <thead class="zawgyi unicode">
                        <th style="width:150px" class="zawgyi unicode">Treature Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Operation</th>
                       
                      
                      </thead>
                      <tbody>
                      <?php
                      $titles=$object->Select_Title("tasks");
                      foreach($titles as $task){
                        ?>
                      
                      <tr class="zawgyi unicode">
                        <td><?php echo $task['title'] ?></td>
                        <td><img src="../title_image/<?php  echo $task['image'] ?>" alt="" style="border:2px solid gray" width="100px" height="100px"></td>
                        <td><?php echo $task['summary'] ?></td>
                        <td><a onclick= "javaScript: return confirm('Are you sure to delete?')" href="include_admin/function.php?task_treature=<?php echo $task['id'] ?>"><i class="fa fa-trash fa-2x"></i></a>&nbsp;&nbsp;
                       <a href="summary.php?source=<?php echo 'updatetitle' ?>&update_treature=<?php echo $task['id'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                    </td>
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
           