<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">MYANMAR' TREATURES <code id="clock"></code></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:0.75rem">
             <i class="fa fa-tasks"></i> Post Titles
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">


            <?php 
              $results1=$obj->Select_Trend("tasks","important");
              foreach ($results1 as $result1) {
                ?>
              <a class="dropdown-item" href="problem_posts.php?trend_id=<?php echo $result1['id'] ?>"><?php echo $result1['title']; ?> &nbsp;&nbsp;<span style="color:red">
            
              <?php  $number=$object->Select_Trend_Count("problem_post_list",$result1['id']);
               ?>
            
           <?php echo $number; ?> </span> </a>
              <?php
              }
              ?>
                  
           <div class="dropdown-divider"></div> 
               
              <?php 
              $results=$obj->Select_Treature("tasks","nine");
           
              foreach ($results as $resulting) {
                ?>
              <a class="dropdown-item" href="treature_post.php?treature_id=<?php echo $resulting['id'] ?>"><?php echo $resulting['title']; ?> &nbsp;&nbsp;<span style="color:red">
              
              <?php  $number=$object->Select_Post_Count("treature_post_list",$resulting['id']);
               ?>
            
           <?php echo $number; ?>

              </span> </a>
              <?php
              }
              ?>
           </div>
            
          </li>
 
       
          <li class="nav-item dropdown">
          
          <?php $comment_count=$obj->Select_Comment_List("comment"); 
           
           if(count($comment_count) > 0) {
            ?>
           
         
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:0.75rem">
                      <i class="fa fa-bell"></i><span style="color:red"> 
               (<?php
              
                echo  count($comment_count);
               ?>)
            </span>
            </a>
            <?php }

              else {
                    ?>
                    <a class="nav-link " >
                    <i class="fa fa-bell"></i><span style="color:red"> 
                   </a>
        <?php
        }

        ?>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        
                 <?php $comment_count=$obj->Select_Comment_List("comment");
                 foreach($comment_count as $comment_name){ ?>
                 <a class="dropdown-item" href="view_comment.php?comment_id=<?php echo $comment_name['id'] ?>" style="color:red">
                    <?php echo $comment_name['name'] ?>
                 </a>
                 <?php }?>
             
           </div>
                
            
          </li>


          
          <li class="nav-item ">
            <a class="nav-link" href="profile.php">
              <i class="fa fa-user"></i>
              Profile
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="include_admin/logout.php">
             Logout <i class="fa fa-sign-out"></i>
            </a>
           </li>
            </ul>
          </div>
        </div>
      </nav>