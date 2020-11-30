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
								<h3>Update Password</h3>
		
<?php
if (isset($_POST['submit'])){
	$username=$_POST['username'];
    $upassword_lama1=$_POST['password_lama1'];
    $upassword_lama2=md5($_POST['password_lama2']);
    $upassword_baru=md5($_POST['password_baru']);
    $upassword_konfirmasi=md5($_POST['password_konfirmasi']);
    if($upassword_lama2==''||$upassword_baru==''||$upassword_konfirmasi==''||strlen($upassword_baru)<5){
        $token=md5('salah');
        $url='Location: password.php?token='.$token;
        header($url);    
    } else {
        if($upassword_lama1==$upassword_lama2){
            if($upassword_baru==$upassword_konfirmasi){
                $_SESSION['password']=$upassword_baru;
                $sql2="UPDATE login SET password='$upassword_baru' WHERE username='$username'";
                $koneksi->query($sql2);
                $token=md5('berhasil');
                $url='Location: password.php?token='.$token;
                header($url);
            } else {
                $token=md5('beda');
                $url='Location: password.php?token='.$token;
                header($url);    
            }
        } else {
            $token=md5('salah');
            $url='Location: password.php?token='.$token;
            header($url);  
        }   
    }
}
$username=$_SESSION['username'];
$pass_lama=$_SESSION['password'];

?>
		  <form action="#" method="post">
			 <div class="col-md-12 contact-left">
			 	<input type="hidden" name="username" readonly="readonly" value="<?php echo $username; ?>" >
                <input type="hidden" name="password_lama1" value="<?php echo $pass_lama; ?>" size="10" >
                <input type="password" name="password_lama2" placeholder="Password Lama" required="" style="width: 100%; height: 50px; padding-left: 5px;" /><br /><br />
                <input type="password" name="password_baru" placeholder="Password Baru" required="" style="width: 100%; height: 50px; padding-left: 5px;" /><br /><br />
                <input type="password" name="password_konfirmasi" placeholder="Password Konfirmasi" required="" style="width: 100%; height: 50px; padding-left: 5px;" /><br /><br />
				<input type="submit" name="submit" value="UPDATE PASSWORD" style="width: 100%" />
			 </div>
			 <div class="clearfix"></div>
		 </form>		
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
							</div>
								<?php include 'footer.php';?>
						</div>
				<!--//content-inner-->
<?php include 'menu.php'; ?>
</body>
</html>

<?php
    $token = $_GET['token'];
    if($token==md5('berhasil')){
        echo '<script type="text/javascript">alert("<br />Password berhasil diupdate!<br />Terima Kasih.")</script>';
    } else if($token==md5('salah')){
        echo '<script type="text/javascript">alert("<br />Password lama salah!<br />Terima Kasih.")</script>';
    } else if($token==md5('beda')){
        echo '<script type="text/javascript">alert("<br />Password baru dan konfirmasi beda!<br />Terima Kasih.")</script>';
    } 
?>