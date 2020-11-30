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