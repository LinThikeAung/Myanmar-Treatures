
<?php include_once "treaturesite/header.php" ?>
		<div class="main-wrapper-first">
<?php include_once "treaturesite/nav.php" ?> 
        <div class="container">
				        <div class="row" style="margin-left:20rem;margin-top:7rem;">
						
						   <div class="col-md-7 col-md-offset-2" style="background-color:gray">
						   <br>
                                    <h5 style="color:white;text-align:center" >Login</h5>
                                    <br>
                                
									<form action="treaturesite/market_login.php" method="post">
                                    <?php
										   if(isset($_GET['msg'])){
											   $msg=$_GET['msg'];?>
											 <p class="alert alert-danger"><?php echo $msg ?></p>
										  <?php } 
										  ?>
                                    <div class="form-group">
											<input type="text" name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder ='Name'" required class="single-input">
										</div>
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
                    
            <?php include_once "treaturesite/address.php" ?>
		
                   <hr>
				
		
	<?php include_once "treaturesite/footer.php" ?>