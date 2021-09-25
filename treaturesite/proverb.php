<section class="amazing-works-area fluid" style="background-image: -webkit-linear-gradient(0deg, #e66587 0%, #f09458 100%);" >
						<div class="row justify-content-center">
							<div class="col-lg-8 col-lg-8 col-sm-8 col-xs-8">
								<div class="section-title text-center">
									<h3 class="zawgyi unicode text-white" >လူမျိုးအလိုက်</h3>
									<span class="text-uppercase text-white zawgyi unicode">စကားပုံလေးများ </span>
								</div>
							</div>
						</div>
						<div class="active-works-carousel mt-40">
						<?php 
						 $proverbs=$object1->Select_Proverbs("proverbs");
						
						 foreach ($proverbs as $proverb) {
							?>
						
							<div class="item">
								<div class="thumb" style="background: url(proverb_image/<?php echo $proverb['image'] ?>);border:2px solid black">
								<a href="image/innthar.jpg"></a></div>
								<div class="caption text-center">
									<h4 class="text-uppercase zawgyi unicode text-white"><?php echo $proverb['religion'] ?></h4>
									<p class="zawgyi unicode text-white">
									<?php echo $proverb['first_proverb'] ?><br><br>
									<?php echo $proverb['second_proverb'] ?>
									</p>
								</div>
							</div>
							<?php
						 }
						
						?>
						</div>
				</section>