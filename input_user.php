<!DOCTYPE HTML>
<html>
<?php include 'head.php'; ?>
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
					<!-- //header-ends -->
						<div class="outter-wp">
							<div class="main-grid3 p-skill">
								<h3>Input User</h3>
								
								<?php
                if (isset($_POST['submit'])){
                    	$username=$_POST['username'];
                        $sql = "INSERT INTO login (username) VALUES ('$username')";
                        $token=md5('sama');
                		$url='Location: input_user.php?token='.$token;
                        $koneksi->query($sql) or die(header($url));
                        $token=md5('baru');
                		$url='Location: input_user.php?token='.$token;
                		header($url);
                }
                ?>
<form action="#" method="post">
	<input type="text" name="username" maxlength="30" class="form-control" required="" placeholder="Username"><br />
	<br />
	<button type="submit" name="submit" class="btn btn-default" style="width: 100%">Input User Baru</button> 
</form>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
							</div>
								<?php include 'footer.php';?>
						</div>
				<!--//content-inner-->
<?php include 'menu.php'; ?>
</body>
</html>
<?php
    $token = $_GET['token'];
    if($token==md5('baru')){
        echo '<script type="text/javascript">alert("<br />User Baru berhasil di input!<br />Password: 123456.<br />Terima Kasih.")</script>';
    } else if($token==md5('sama')){
        echo '<script type="text/javascript">alert("<br />Username sudah pernah di input!<br />Terima Kasih.")</script>';
    }
?>