<?php include_once "treaturesite/header.php" ?>
<?php include_once "treaturesite/function1.php" ?>
		<div class="main-wrapper-first container-fluid" style="width:100%;">
		
	    <?php include_once "treaturesite/nav.php"?>
			<div class="banner-area" style="background-image:url(img/3000.jpg);background-size:cover;">
			<br>

				<div class="container">
				<a href="index.php"><h2  style="color:black;font-family:Imprint MT Shadow;text-align:center">SAVING MYANMAR'S TREASURES</h2></a>

					<div class="row justify-content-center height align-items-center">
                          
						<div class="col-md-5">

							<div class="banner-content text-center">
							<br><br><br>
							<form action="index.php" method="post">
							<div class="form-group">
							<?php if(isset($_GET['msgg'])){
                             ?>
							  <p class="alert alert-danger"><?php echo $_GET['msgg'] ?></p>
					      <?php
							}
							 
							?>
								<input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
							</div>
							<div class="form-group">
							<input type="submit" name="subscribe" class="genric-btn success-border radius" value="Subscribe">
							</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>

					<!-- Start Feature Area -->
				<?php include_once "treaturesite/important.php" ?>
					<!-- End Feature Area -->
					<!-- Start Service Area -->
				<?php include_once "treaturesite/projects.php" ?>
				
				<?php include_once "treaturesite/proverb.php" ?>
		
			
			
		  
			<br><br>
			<div class="container" >
				        <div class="row">
						   <div class="col-md-12" >
									<h5 style="color:white;text-align:center" class="zawgyi unicode" >Discuss here</h5>
									<form action="" method="post" id="formbox" onsubmit="return formSubmit();">
						
							<h4 id="success"></h4>
							
									<div class="form-group" >
											<input type="text" name="name"  class="form-control zawgyi unicode" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required class="single-input">
										</div>
										
										<div class="form-group">
										   <textarea  name="feedback" id="" placeholder="Comments" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Comments'" required class="single-input" class="form-control zawgyi unicode" cols="30" rows="5"></textarea>										</div>
									  </div>
									  <div class="form-group">
									  &nbsp;&nbsp;&nbsp; <input type="submit" name="send" value="OK" class="genric-btn btn-md info-border">
									  </div>
									</form>
						</div>
						</div>
						<?php include_once "treaturesite/address.php" ?>
						</div>
						</div>
           
					
                   <hr>
		<?php include_once "treaturesite/map.php" ?>				
		
	<?php include_once "treaturesite/footer.php" ?>
	