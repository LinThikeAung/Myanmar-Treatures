
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
                                  
										<div class="form-group">
											<input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'" required class="single-input">
                                        </div>
                                        
                                        <div class="form-group">
											<input type="password" name="old_password" placeholder="Old Password" onfocus="this.placeholder = ''" onblur="this.placeholder ='Old Password'" required class="single-input">
										</div>

                                        <div class="form-group">
											<input type="password" name="new_password" placeholder="New Password" onfocus="this.placeholder = ''" onblur="this.placeholder ='New Password'" required class="single-input">
										</div>
									
									  <div class="form-group">
									   <input type="submit" name="change" value="Login" class="genric-btn btn-md info-border">
									  </div>
									</form>
						</div>
						</div>
                    
            <?php include_once "treaturesite/address.php" ?>
		
                   <hr>
				
		
	<?php include_once "treaturesite/footer.php" ?>