
<?php 

include 'connect/connection.php'; 

// $sqlid = "SELECT basic_id FROM basic_tag_code";
// $resultid = mysqli_query($newcon,$sqlid)or die("error 0").mysqli_error(); 
// $rowid = mysqli_fetch_array($resultid);
// $Idmenu = $rowid['basic_id'];

?>

<div class="site-wrap">

	<div class="site-mobile-menu">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close mt-3">
				<span class="icon-close2 js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div> <!-- .site-mobile-menu -->

	<div class="site-navbar-wrap js-site-navbar bg-white">

		<div class="container">
			<div class="site-navbar bg-light">
				<div class="row align-items-center">
					<div class="col-2">
						<h2 class="mb-0 site-logo"><a href="#" class="font-weight-bold text-uppercase">Neos</a></h2>
					</div>
					<div class="col-10">
						<nav class="site-navigation text-right" role="navigation">
							<div class="container">
								<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
								
								<ul class="site-menu js-clone-nav d-none d-lg-block">
									<li class="active"><a href="index.html">Home</a></li>
									
									 <li class="has-children">
										<a href="#">Program</a>

										<ul class="dropdown arrow-top"> 
											<?php 
												// $sqlmenu = "SELECT tsh_code.tag_code_id, tsh_code.tag_code_name , btag_code.ref_tag_code_id , btag_code.basic_name , btag_code.basic_desctition, btag_code.basic_id
												// 			FROM tagshod_code as tsh_code
												// 			INNER JOIN basic_tag_code as btag_code
												// 			on tsh_code.tag_code_id = btag_code.ref_tag_code_id";
												// echo $sqlmenu; //die();
												// $resault = mysqli_query($newcon,$sqlmenu)or die("error").mysqli_error();
												// while ($rowmenu = mysqli_fetch_array($resault)) {
												// 	$BasicName = $rowmenu['basic_name'];
												// 	$BasicId = $rowmenu['basic_id'];
												// 	$TagCodeId = $rowmenu['tag_code_id'];
												// 	$RefTagCodeId = $rowmenu['ref_tag_code_id'];
												// 	$TagCodeName = $rowmenu['tag_code_name'];
												// 	$Desctitionl = $rowmenu['basic_desctition'];
												// 	echo '<li>
												// 		<a href="list.php?tag_code_id='.$TagCodeId.'&tag_code_name='.$TagCodeName.'&basic_id='.$BasicId.'&basic_name='.$BasicName.'&basic_desctition='.$Desctitionl.'">
												// 			'.$TagCodeId.' - '.$TagCodeName.'
												// 		</a>
												// 	</li>';
											//} ?>	
										</ul>
																				
									</li>									
								</ul>

								
								<!-- <ul class="site-menu js-clone-nav d-none d-lg-block">
									<li class="active"><a href="index.html">Home</a></li>
									<li class="has-children">
										<a href="about.html">About</a>
										<ul class="dropdown arrow-top">
											<li><a href="testimonials.html">Testimonials</a></li>
											<li><a href="gallery.html">Gallery</a></li>
											<li><a href="faq.html">FAQ</a></li>
											<li><a href="why-choose-us.html">Why Choose Us</a></li>
											<li class="has-children">
												<a href="#">Sub Menus</a>
												<ul class="dropdown">
													<li><a href="testimonials.html">Testimonials</a></li>
													<li><a href="gallery.html">Gallery</a></li>
													<li><a href="why-choose-us.html">Why Choose Us</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="services.html">Services</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="contact.html"><span class="d-inline-block bg-primary text-white btn btn-primary">Get Started</span></a></li>
								</ul> -->

								

							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
