
<?php include_once "treaturesite/header.php" ?>
		<div class="main-wrapper-first">
<?php include_once "treaturesite/nav.php" ?> 
        <div class="container">
				        <div class="row" style="margin-left:20rem;margin-top:7rem;">
						
						   <div class="col-md-8 col-md-offset-2" style="background-color:gray">
						   <br>
                                    <h5 style="color:white;text-align:center" >Traditional Market</h5>
                                    <br>
                                    <?php
										   if(isset($_GET['pass'])){
											   $pass=$_GET['pass'];?>
											 <p class="alert alert-danger"><?php echo $pass ?></p>
										  <?php } 
									?>
                                      <?php
										   if(isset($_GET['success'])){
											   $success=$_GET['success'];?>
											 <p class="alert alert-danger"><?php echo $success ?></p>
										  <?php } 
										  ?>
									<form action="treaturesite/market_login.php" method="post">

										<div class="form-group">
											<input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'" required class="single-input">
                                        </div>
                                        
                                        <div class="form-group">
											<input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder ='Password'" required class="single-input">
										</div>
									
									  <div class="form-group">
									   <input type="submit" name="market_login" value="Login" class="genric-btn btn-md info-border">
									  </div>
									</form>
						</div>
						</div>
                    
            <?php include_once "treaturesite/address.php" ?>
		
                   <hr>
						
		
	<?php include_once "treaturesite/footer.php" ?>