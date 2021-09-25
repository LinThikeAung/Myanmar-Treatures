<section class="featured-area" style="background-image: -webkit-linear-gradient(0deg, #e66587 0%, #f09458 100%);">
				<div class="container">
						<h3 class="text-uppercase text-white text-center zawgyi unicode">ယခုလက်ရှိမြန်မာနိုင်ငံတွင်ဖြစ်ပွားနေသော ပြသနာသုံးခုအကြောင်း</h3>

					<div class="row">
					<?php
					 
					 $problems=$object1->Select_Problems("tasks","important");
					foreach($problems as $problem){

						?>
				
						<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
										<div class="single-service"><h4 class=" text-white text-center zawgyi unicode"><?php echo $problem['title'] ?></h4><br>
											<div class="thumb rounded"  style="background: url(trend_image/<?php echo $problem['image'] ?>);border: 2px solid black">
												<div class="overlay overlay-content d-flex justify-content-center align-items-center" style=" background: rgba(255, 255, 255, 0.5);">
													<a href="problem.php?trend_id=<?php echo $problem['id'] ?>" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">View Posts</span><span class="lnr lnr-arrow-right"></span></a>
												</div>
											</div>
											<div class="desc">
												<p class="text-white zawgyi unicode"><?php echo $problem['summary'] ?></p>
											</div>
										</div>
									
						</div>
					
						<?php
					}
					?>
					</div>
				</div>
			</section>