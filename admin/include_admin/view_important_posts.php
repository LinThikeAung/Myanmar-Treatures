
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <?php
                    //  $title=$_GET['title'];
                      $id=$_GET['trend_id'];
                      $problem_posts=$object->Select_Important_Posts("problem_post_list",$id);
            ?>
            <?php 
            if(count($problem_posts)==0){
           ?>
                       <a href="problem_posts.php?important_post=<?php echo 'new_post' ?>&trend_id=<?php echo $_GET['trend_id']  ?>" class="btn btn-info"><i class="fa fa-plus fa-2x"></i>&nbsp;New Post</a>

           <?php

            }
            else{
            ?>
     <a href="problem_posts.php?important_post=<?php echo 'new_post' ?>&trend_id=<?php echo $_GET['trend_id']  ?>" class="btn btn-info"><i class="fa fa-plus fa-2x"></i>&nbsp;New Post</a>

              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0 zawgyi unicode">Total Posts


                  <?php  $number=$object->Select_Trend_Count("problem_post_list",$_GET['trend_id']);
               ?>
            
                (<?php echo $number; ?>)

                  </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" border="2px solid white">
                      <thead class=" text-primary zawgyi unicode">
                        <th style="width:150px">Post Titles</th>
                        <th>Post Category</th>
                        <th>Total Comments</th>
                        <th>Posted Time</th>
                        <th>View Details</th>

                      </thead>
                      <tbody>
                    <?php
                      foreach($problem_posts as $allpost){
                        ?>
                      
                      <tr class="zawgyi unicode">
                        <td><?php echo $allpost['post_titles'] ?></td>
                           <td>
                        <?php
                        $trend_id=$_GET['trend_id'];
                         $sql="SELECT * FROM tasks WHERE id=$trend_id";
                         $query=mysqli_query($object->connection,$sql);
                         $row=mysqli_fetch_assoc($query);
                        ?>
                        <?php echo $row['title'] ?>
                       </td>
                       <td class="zawgyi unicode">
                       <?php
                       $pstId=$allpost['post_id'];
                       $cmt="SELECT * FROM trend_comment WHERE post_id=$pstId";
                       $cmt_query=mysqli_query($object->connection,$cmt);
                       ?>
                       <a href="view_comment.php?trend_cmt=<?php echo $allpost['post_id']?>"><?php echo mysqli_num_rows($cmt_query) ?></a>
                       <?php
                       ?>
                       
                       </td>
                        <td><?php echo $allpost['posted_time'] ?></td>
                       <td><a href="problem_posts.php?important_post=<?php echo 'view_detail' ?>&trend_update=<?php echo $allpost['post_id']?>&back_id1=<?php echo $_GET['trend_id'] ?>" class="btn btn-info"><i class="fa fa-eye fa-2x"></i>View</a></td>

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