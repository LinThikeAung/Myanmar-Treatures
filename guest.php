
<?php include_once "treaturesite/header.php" ?>
<div class="main-wrapper-first" >
<?php include_once "treaturesite/nav.php" ?>
<br> <br><br>
        <div class="container" >
				        <div class="row justify-content-center">
						 
						   <div class="col-md-7 col-md-offset-2" style="background-color:gray">
						   <br>
                                    <h5 style="color:white;text-align:center" >Login</h5>
                                    <br>
                                
									<form action="treaturesite/login.php" method="post">
										  <?php
										   if(isset($_GET['msg'])){
											   $msg=$_GET['msg'];?>
											 <p class="alert alert-danger"><?php echo $msg ?></p>
										  <?php } 
										  ?>

                                        <?php
										   if(isset($_GET['pass'])){
											   $pass=$_GET['pass'];?>
											 <p class="alert alert-danger"><?php echo $pass ?></p>
										  <?php } 
										  ?>
										<div class="form-group">
											<input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'" required class="single-input">
                                        </div>
                                        
                                        <div class="form-group">
											<input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder ='Password'" required class="single-input">
										</div>
									
									  <div class="form-group">
									   <input type="submit" name="login" value="Login" class="genric-btn btn-md info-border">
									  </div>
									</form>
						</div>
						</div>
                    <br><br><br>
            <?php include_once "treaturesite/address.php" ?>
		
                   <hr>
				
		
	<?php include_once "treaturesite/footer.php" ?>