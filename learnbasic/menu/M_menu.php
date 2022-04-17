
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
										<a href="#">Calendar</a>
										<ul class="dropdown arrow-top">
											<li><a href="day_of_week.php">ข้อมูลปฎิทิน</a></li>
										</ul>
									</li>
									
									 <li class="has-children">
										<a href="#">Program</a>

										<ul class="dropdown arrow-top"> 
											<?php 
												$sqlmenu = "SELECT * FROM menu_code";
												//echo $sqlmenu; //die();
												$resault = mysqli_query($newcon,$sqlmenu)or die(mysqli_error($newcon));
												while ($rowmenu = mysqli_fetch_array($resault)) {
                                                    $Code_M_Id = $rowmenu['codemunu_id'];
                                                    $Code_M_Name = $rowmenu['codemunu_name'];
                                                    $Status_m_code = $rowmenu['status_m_code'];
													echo '<li>
                                                        <a href="list.php?Id='.$Code_M_Id.'&status='.$Status_m_code.'">'.$Code_M_Id.' - '.$Code_M_Name.'</a>													
                                                        </li>';
											} ?>	
										</ul>
																													
									</li>

								</ul>


							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
