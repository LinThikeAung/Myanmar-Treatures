<?php include_once "treaturesite/header.php" ?>

		
     <div class="container">
	    <?php include_once "treaturesite/nav.php" ?>
		<br><br>

              <br><br>

			    <div class="row">
					<div class="col-md-12" style="text-align:center">
					<div class="logo" style="">
                        <img src="img/logo.png" alt="">
					</div> 
					<br>
					</div>
				
				   <div class="col-md-12">
				   <blockquote class="generic-blockquote">
				   <h4 style="text-align:center" class="zawgyi unicode">မြန်မာ့ရတနာများ</h4><br>
				<?php
				$aboutuss=$object1->Select_About("about");
				foreach($aboutuss as $about){
					echo $about['objective'];
				}
				
				?>
					</blockquote>

				   </div>
				   
				  
				
				</div>
                
			</div> 
    
         <?php include_once "treaturesite/address.php" ?>    
	<?php include_once "treaturesite/footer.php" ?>