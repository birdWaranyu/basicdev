
	<footer class="site-footer bg-dark">
		<div class="container">


			<div class="row">
				<div class="col-md-4 mb-4 mb-md-0">
					<h3 class="footer-heading mb-4 text-white">About</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quos rem ullam, placeat amet.</p>
					<p><a href="#" class="btn btn-primary text-white px-4">Read More</a></p>
				</div>
				<div class="col-md-5 mb-4 mb-md-0 ml-auto">
					<div class="row mb-4">
						<div class="col-md-6">
							<h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
							<ul class="list-unstyled">
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contacts</a></li>
								<li><a href="#">Privacy</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h3 class="footer-heading mb-4 text-white">Free Templates</h3>
							<ul class="list-unstyled">
								<li><a href="#">HTML5 / CSS3</a></li>
								<li><a href="#">Clean Design</a></li>
								<li><a href="#">Responsive</a></li>
								<li><a href="#">Multi Purpose Template</a></li>
							</ul>
						</div>
					</div>

					<div class="row mb-5">
						<div class="col-md-12">
							<h3 class="footer-heading mb-4 text-white">Stay up to date</h3>
							<form action="#" class="d-flex footer-subscribe">
								<input type="text" class="form-control rounded-0" placeholder="Enter your email">
								<input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
							</form>
						</div>
					</div>
				</div>


				<div class="col-md-2">

					<div class="row">
						<div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
						<div class="col-md-12">
							<p>
								<a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
								<a href="#" class="p-2"><span class="icon-twitter"></span></a>
								<a href="#" class="p-2"><span class="icon-instagram"></span></a>
								<a href="#" class="p-2"><span class="icon-vimeo"></span></a>

							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row pt-5 mt-5 text-center">
				<div class="col-md-12">
					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>


				</div>

			</div>
		</div>
	</footer>

</div>


<script src="../code/js/jquery-3.3.1.min.js"></script>
<script src="../code/js/jquery-migrate-3.0.1.min.js"></script>
<script src="../code/js/jquery-ui.js"></script>
<script src="../code/js/popper.min.js"></script>
<script src="../code/js/bootstrap.min.js"></script>
<script src="../code/js/owl.carousel.min.js"></script>
<script src="../code/js/jquery.stellar.min.js"></script>
<script src="../code/js/jquery.waypoints.min.js"></script>
<script src="../code/js/jquery.animateNumber.min.js"></script>
<script src="../code/js/aos.js"></script>
<script src="../code/js/main.js"></script>


<script type="text/javascript">
	
	var btn = $('#button');

	$(window).scroll(function() {
	  if ($(window).scrollTop() > 300) {
	    btn.addClass('show');
	  } else {
	    btn.removeClass('show');
	  }
	});

	btn.on('click', function(e) {
	  e.preventDefault();
	  $('html, body').animate({scrollTop:0}, '300');
	});

</script>

</body>
</html>