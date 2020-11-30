<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="home.php"> <span id="logo"> <h1>BPS</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="home.php"><img src="images/bps.png"></a>
									  	</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li><a href="home.php"><i class="fa fa-globe"></i> <span>Home</span></a></li>
										<!-- <li><a href="password.php"><i class="fa fa-key"></i> <span>Update Password</span></a></li> -->
										<?php
											if($_SESSION['aktor']=='admin'){
												include 'menu_admin.php';
											}
											
											elseif($_SESSION['aktor']=='user'){
												include 'menu_user.php';
											}
											
										?>
										 <!-- <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Clustering Data</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="training_view.php"> View Data Training</a></li>
											<li id="menu-academico-avaliacoes" ><a href="testing.php"> Testing Data</a></li>
											<li id="menu-academico-avaliacoes" ><a href="grafik.php"> Grafik</a></li>
											<li id="menu-academico-avaliacoes" ><a href="peta_tematik.php"> Peta Tematik</a></li>
										  </ul>
										</li>
									<li><a href="report.php"><i class="fa fa-print"></i> <span>Report</span></a></li>	
									<li><a href="index.php"><i class="lnr lnr-power-switch"></i> <span>Logout</span></a></li> -->
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>