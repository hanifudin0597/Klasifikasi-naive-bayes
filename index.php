<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" href="images/bps.png">
<title>Badan Pusat Statistik</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="NBayes Hanif" />
<link href="alert/css/alert.css" rel="stylesheet" type="text/css" media="all">
<script src="alert/js/alert.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--clock init-->
</head> 
<body>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													&nbsp;<img src="images/bps.png" />
													    <div class="login">
														<h3 class="inner-tittle t-inner">Badan Pusat Statistik Jakarta</h3>
<?php
include 'koneksi.php';

			if(isset($_POST['submit'])){
    			$username = $_POST['username'];
		    	$password = md5($_POST['password']);
    			$sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
    			$hasil=$koneksi->query($sql);
    			if($hasil->num_rows>0){
                	while($hsl=$hasil->fetch_assoc()){
		        		$_SESSION['username']=$hsl['username'];
        				$_SESSION['password']=$hsl['password'];
        				$_SESSION['aktor']	 =$hsl['aktor'];
        				header('Location: home.php');
        			}
				} else {
					$token=md5('salah');
                    $url='Location: index.php?token='.$token;
                    header($url);
				}
			}
			?>
<form method="post" action="#">
	<input type="text" class="text" name="username" required="" placeholder="Username">
	<input type="password" name="password" required="" placeholder="Password">
	<div class="submit">
		<input type="submit" name="submit" value="Login">
	</div>
	<div class="clearfix"></div>																
</form>
														</div>

														
													</div>
													
													
												<!--//login-top-->
										   </div>
						
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
												
										   <!-- <p>&copy 2020 NBayes . All Rights Reserved | Design by <a href="http://sttpln.ac.id" target="_blank">Institute Teknologi PLN</a></p> -->
										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
    $token = $_GET['token'];
    if($token==md5('salah')){
        echo '<script type="text/javascript">alert("<br />Username / Password Salah!<br />Mohon periksa kembali.<br />Terima Kasih.")</script>';
    }
?>