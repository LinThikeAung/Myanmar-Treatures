          

<section class="footer-widget-area" >
						<div class="row" style="margin-left:8rem;">
						<?php
						 
						 $addresses=$object1->Select_Address("contactus");
						 foreach ($addresses as $address) {
						?>
						
							<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
								<div class="single-widget d-flex flex-wrap justify-content-between">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="lnr lnr-apartment"></span>
									</div>
									<div class="desc">
										<h6 class="title text-uppercase">Address</h6>
										<p><?php echo $address['country'] ?> <br>
										<?php echo $address['current_address'] ?><br>
										<?php  echo $address['permanent_address'] ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
								<div class="single-widget d-flex flex-wrap justify-content-between">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="lnr lnr-envelope"></span>
									</div>
									<div class="desc">
										<h6 class="title text-uppercase">Email Address</h6>
										<div class="contact">
											<a href="<?php  echo $address['first_email'] ?>"><?php  echo $address['first_email'] ?></a> <br>
											<a href="<?php  echo $address['second_email'] ?>"><?php  echo $address['second_email'] ?></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
								<div class="single-widget d-flex flex-wrap justify-content-between">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="lnr lnr-phone"></span>
									</div>
									<div class="desc">
										<h6 class="title text-uppercase">Phone Number</h6>
										<div class="contact">
											<a href=""><?php  echo $address['first_phone'] ?></a> <br>
											<a href=""><?php  echo $address['second_phone'] ?></a>
										</div>
									</div>
								</div>
							</div>
							<?php
						 }
						?>
						</div>
					</div>
	</section>
		