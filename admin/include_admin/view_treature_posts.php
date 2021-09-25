
     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <?php
                   
                      $id=$_GET['treature_id'];
                      $treature_posts=$object->Select_Treature_Posts("treature_post_list",$id);
            ?>
            <?php 
            
                if(count($treature_posts)==0){
           ?>
                       <a href="treature_post.php?treature_post=<?php echo 'new_post_treature' ?>&treature_id=<?php echo $_GET['treature_id']  ?>" class="btn btn-info"><i class="fa fa-plus fa-2x"></i>&nbsp;New Post</a>
                       
           <?php

            }
            else{
            ?>
            <a href="treature_post.php?treature_post=<?php echo 'new_post_treature' ?>&treature_id=<?php echo $_GET['treature_id']  ?>" class="btn btn-info"><i class="fa fa-plus fa-2x"></i>&nbsp;New Post</a>
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0 zawgyi unicode">Total Posts

                  <?php  $number=$object->Select_Post_Count("treature_post_list",$_GET['treature_id']);
               ?>
            
                (<?php echo $number; ?>)

                  </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" border="2px solid white">
                      <thead class=" text-primary zawgyi unicode">
                        <th style="width:150px">Post Titles</th>
                        <th>Post Categories</th>
                        <th>Total Comments</th>
                        <th>Posted Time</th>
                        <th>View Detials</th>

                      </thead>
                      <tbody>
                    <?php
                      foreach($treature_posts as $alltreature){
                        ?>
                      
                      <tr class="zawgyi unicode">
                        <td><?php echo $alltreature['post_titles'] ?></td>
                        <td >
                        <?php
                        $treature_id=$_GET['treature_id'];
                         $sql="SELECT * FROM tasks WHERE id=$treature_id";
                         $query=mysqli_query($object->connection,$sql);
                         $row=mysqli_fetch_assoc($query);
                        ?>
                        <?php echo $row['title'] ?>
                       </td>
                       <td class="zawgyi unicode">
                       <?php
                       $pstId=$alltreature['post_id'];
                       $cmt="SELECT * FROM treature_comment WHERE post_id=$pstId";
                       $cmt_query=mysqli_query($object->connection,$cmt);
                       ?>
                       <a href="view_comment.php?treature_cmt=<?php echo $alltreature['post_id']?>"><?php echo mysqli_num_rows($cmt_query) ?></a>
                       <?php
                       ?>
                       
                       </td>

                        <td><?php echo $alltreature['posted_time'] ?></td>
                      <td> <a href="treature_post.php?treature_post=<?php echo 'view_detail_treature' ?>&treature_update=<?php echo $alltreature['post_id']?>&delete_id=<?php echo $_GET['treature_id'] ?>" class="btn btn-info"><i class="fa fa-eye fa-2x"></i>View</a></td>
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
           
          <?php
            }
            ?>
          </div>
          </div>
          </div>
       