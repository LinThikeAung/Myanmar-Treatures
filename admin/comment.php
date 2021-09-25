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
              <div class="card card-plain">
                <div class="card-header card-header-info">
                <?php $sql="SELECT * FROM comment ";
                  $query=mysqli_query($object->connection,$sql);
                  
                ?>
                  <h4 class="card-title mt-0 ">User Feedbacks&nbsp;(<?php echo mysqli_num_rows($query) ?>)</h4>
                </div>
                <div class="card-body">

           <?php         
              $per_page=10;
              if(isset($_GET['page'])){

                  $page=$_GET['page'];
              }
              else{

                $page="";

              }

                if($page==""){
                    $page_start=0;
                  }
                  else{
                $page_start=($page*10)-10;

                  }
              
  ?>
            
                  <div class="table-responsive">
                    <table class="table" border="2px solid white">
                      <thead class=" text-primary">
                        <th style="width:140px">Name</th>
                         <th>Feedback</th>
                        <th>Commented_Time</th>
                         <th>Operation</th>
                      </thead>
                      <tbody>
                      <?php
                      $query="SELECT * FROM comment ORDER BY id DESC LIMIT $page_start,$per_page";
                      $sql=mysqli_query($object->connection,$query);
                      while ($comments=mysqli_fetch_assoc($sql)){
                              $description=$comments['feedback'];
                      ?>
                     
                      <tr> 
                      <td><?php echo $comments['name'] ?></td> 
                      <td><?php   echo substr($description,0,700);
                                                echo strlen($description)>700 ? '. . . . . .': '';  ?></td>
                      <td><?php echo $comments['commented_time'] ?></td>
                       <td><a href="home_comment.php?eye=<?php  echo $comments['id'] ?>"><i class="fa fa-eye fa-2x"></i></a>&nbsp;&nbsp;</td>
                      
                       </tr>
                       <?php
                      }
                      ?>
                      </tbody>
                    </table>
                  </div>
                  <?php

                $query="SELECT * FROM comment";
                $result=mysqli_query($object->connection,$query);
                $post_count=mysqli_num_rows($result);
                $page_count=ceil($post_count/10);

                ?>  

                <!-- Pager -->


                  
                <ul class="pagination justify-content-center">
                  
                <?php        
                for($i=1;$i<=$page_count;$i++)
                    {
                    ?>
                      <li class="page-item" style="background-color:skyblue;border:solid white 1px"><a class="page-link"  style="color:black"  href="comment.php?page=<?php echo $i ?>"><?php echo $i ;?></a></li>
                <?php
                    }
                ?>
                </ul>
                                
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   <?php include_once "include_admin/footer.php" ?>