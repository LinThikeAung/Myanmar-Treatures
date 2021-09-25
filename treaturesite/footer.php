<footer>
					<div class="container">
						<div class="footer-content d-flex justify-content-between align-items-center flex-wrap">
							<div class="logo">
								<img src="img/logo.png" alt="">
							</div>
							<div class="copy-right-text">Copyright &copy; 2017  |  All rights reserved to Dinomuz inc. This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></div>
							<div class="footer-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
						</div>
					</div>
				</footer>
				



		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/main.js"></script>
		
		<script>
		function formSubmit(){
			$.ajax({
				type:'POST',
				url:'treaturesite/insert_feedback.php',
				data:$('#formbox').serialize(),

				success: function (response){
                    $('#success').html(response);
				}
			});
			var form=document.getElementById('formbox').reset();
			return false;
	
	}
</script>



<script>
		function formTreature(id){
			$.ajax({
				type:'POST',
				url:'treaturesite/comment_treature.php?post_id=' + id,
				data:$('#treaturebox').serialize(),

				success: function (response){
                    $('#success_msg').html(response);
				}
			});
			var form=document.getElementById('treaturebox').reset();
			return false;
	
	}
</script>


<script>
		function formTrend(id){
			$.ajax({
				type:'POST',
				url:'treaturesite/comment_trend.php?post_id=' + id,
				data:$('#trendbox').serialize(),

				success: function (response){
                    $('#success_msg').html(response);
				}
			});
			var form=document.getElementById('trendbox').reset();
			return false;
	
	}
</script>
	</body>
</html>


