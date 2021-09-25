     
	   <nav class="navbar navbar-expand-lg fixed-top container-fluid" style="background-image: -webkit-linear-gradient(0deg, #e66587 0%, #f09458 100%);">
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			   <span class="navbar-toggler-icon"><i class="fa fa-bars" style="color:white"></i></span>
			</button>
			<div class="logo">
					 <img src="img/logo.png" style="margin-top:-1rem;" alt="">
			     </div> &nbsp;&nbsp;&nbsp;
			<div class="collapse navbar-collapse" id="navbarText">
			  <ul class="navbar-nav mr-auto">
			  <li class="nav-link">
		  <a href="index.php" style="font-size:0.8rem;color:white" class="nav-item "><i class="fa fa-home" style="color:white"></i> Home</a>
	  </li>
	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="font-size:0.8rem;color:white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fa fa-tasks" style="color:white"></i> Myanmar' treasures
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-image: -webkit-linear-gradient(0deg, #e66587 0%, #f09458 100%);">
		<?php 

              $results=$obj->Select_Treature("tasks","nine");
           
              foreach ($results as $resulting) {
                ?>
              <a class="dropdown-item" style="width:17rem;font-size:0.9rem" href="treatures.php?treature_id=<?php echo $resulting['id'] ?>"><?php echo $resulting['title']; ?></a>
			  <div class="dropdown-divider"></div>
              <?php
              }
              ?>	  
			   </div>
	  </li>
	  
	


	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="font-size:0.8rem;color:white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fa fa-tasks" style="color:white"></i> Myanmar' trend
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-image: -webkit-linear-gradient(0deg, #e66587 0%, #f09458 100%);">
		<?php 

             $resultss=$obj->Select_Trend("tasks","important");
              foreach ($resultss as $resultings) {
                ?>
              <a class="dropdown-item" style="width:17rem;font-size:0.9rem" href="problem.php?trend_id=<?php echo $resultings['id'] ?>"><?php echo $resultings['title']; ?></a>
			  <div class="dropdown-divider"></div>
              <?php
              }
              ?>	  
			   </div>
      </li>
				

	
	  <li class="nav-link">
		  <a href="../market/" style="font-size:0.8rem;color:white" class="nav-item"><i class="fa fa-shopping-cart " style="color:white"></i> Traditional Market</a>
	  </li>
	  <li class="nav-link">
		  <a href="about.php" style="font-size:0.8rem;color:white" class="nav-item "><i class="fa fa-users " style="color:white"></i> About us</a>
	  </li>
	
	  <!-- <li class="nav-link">
		  <a href="admin/index.php" style="font-size:0.7rem;color:white" class="nav-item "><i class="fa fa-users " style="color:white"></i> Guest</a>
	  </li> -->
			  </ul>
			 
			</div>
    </nav>
	