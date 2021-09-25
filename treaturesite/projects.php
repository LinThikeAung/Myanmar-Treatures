<section class="service-area" style="background-image: -webkit-linear-gradient(0deg, #e66587 0%, #f09458 100%);" >
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="section-title text-center">
								<h3 class="text-white zawgyi unicode">မြန်မာတို့ရဲ့ရတနာများ</h3>
								<span class="text-white text-uppercase zawgyi unicode">အကျဉ်းချုပ်</span>
							</div>
						</div>
					</div>
					<div class="row">
                   
					<?php      
					
					$projects=$object1->Select_Projects("tasks","nine");
					   
						foreach ($projects as $project) {
							?>
							<div class="col-lg-4 col-sm-6" >
					<div class="single-service">
								<div class="thumb" style="background: url(title_image/<?php echo $project['image'] ?>);border: 2px solid white">
									<div class="overlay overlay-content d-flex justify-content-center align-items-center" style="background: rgba(255, 255, 255, 0.5)">
										<a href="treatures.php?treature_id=<?php echo $project['id'] ?>" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">View Posts</span><span class="lnr lnr-arrow-right"></span></a>
									</div>
								</div>
								<div class="desc">
									<h4 class=" text-white zawgyi unicode"><?php echo $project['title'] ?></h4>
									<p class="text-white zawgyi unicode"><?php echo $project['summary'] ?></p>
								</div>
							</div>
						</div>
						<?php
						}
					?>
					</div>
				</div>
			</section>