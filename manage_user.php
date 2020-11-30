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
								<h3>Manage User</h3>
								
								
<?php
            $cari=$_GET['cari'];
            $hal=$_GET['hal'];
        ?>
        <form action="manage_user.php?cari=$cari" method="get">
                <table><tr><td><span><input type="text" name="cari" value="<?php echo $cari; ?>" class="input-sm form-control" placeholder="cari Username" style="height:35px;"></span></td><td>&nbsp;
                <input type="submit" name="search" class="btn btn-sm btn-default" style="width: 100px;height: 45px;margin-top: -3px;" value="CARI" /></td></tr></table>
        </form><br />

					<?php
        $batas=5;

        if($cari==''){
            $sql="SELECT count(username) FROM login WHERE aktor!='admin'";
        } else {
            $sql="SELECT count(username) FROM login WHERE aktor!='admin' AND username like '%".$cari."%' ORDER BY username ASC";
        }
        $hasil=$koneksi->query($sql);
        $jml_data=0;
        while($hsl=$hasil->fetch_assoc()){
            $jml_data++;
        }
        $hal_akhir=ceil($jml_data/$batas);

        if($hal=='' or $hal=='1') {
            $hal=1;
            $prev=1;
            $posisi=0;
            $next=2;
        } else {
            $posisi=($hal-1)*$batas;
            $prev=$hal-1;
            if($hal<$hal_akhir) {
                $next=$hal+1;
            } else {
                $next=$hal_akhir;
            }
        }

        if($cari==''){
            $sql="SELECT * FROM login WHERE aktor!='admin' ORDER BY username ASC LIMIT $posisi,$batas";
        } else {
            $sql="SELECT * FROM login WHERE aktor!='admin' AND username like '%".$cari."%' ORDER BY username ASC LIMIT $posisi,$batas";
        }
        
        ?>

													
														  <div class="graph">
															<div class="tables">
																<table class="table"> 
																	<thead> 
																		<tr> 
																			<th>#</th> 
																			<th>USERNAME</th> 
																			<th>PASSWORD</th> 
																			<th>AKTOR</th> 
																			<th>AKSI</th> 
																		</tr> 
																	</thead> 
																	<tbody> 
																		<?php
																			$hasil=$koneksi->query($sql);
        																	$cntA=0;
        																	while($hsl=$hasil->fetch_assoc()){
            																	$cntA++;
            																	$cntB = $cntA % 2;
                																if($cntB==0){
                																	echo '<tr class="success">';
                																}
                																echo '<th scope="row">'.(($hal-1)*$batas+$cntA).'</th>';
																				echo '<td>'.$hsl['username'].'</td>';
																				echo '<td>'.$hsl['password'].'</td>';
																				echo '<td>'.$hsl['aktor'].'</td>';
																				echo "<td><a href=\"user_reset.php?username=$hsl[username]\"><u>Reset</u></a> | <a href=\"user_hapus.php?username=$hsl[username]\"><u>Hapus</u></a></td>";
																				echo '</tr>';
																			} 
																		?>
																	</tbody> 
																</table> 


<br />
<div align='center'>
          Data ke: <?php if($cntA==0) { echo '0'; } else { echo $posisi+1; } ?> dari <?php echo $jml_data; ?> | Halaman ke: <?php echo $hal; ?> dari <?php echo $hal_akhir; ?>
</div>
        <div class="paginate" align='center'>
            <?php echo "<a href = \"$_PHP_SELF?hal=1&cari=$cari\">"; ?>
            <img src='images/first.png' style='width: 24px;' /></a> &nbsp;
            <?php echo "<a href = \"$_PHP_SELF?hal=$prev&cari=$cari\">"; ?>
            <img src='images/prev.png' style='width: 24px;' /></a> &nbsp;
            <?php echo "<a href = \"$_PHP_SELF?hal=$next&cari=$cari\">"; ?>
            <img src='images/next.png' style='width: 24px;' /></a> &nbsp;
            <?php echo "<a href = \"$_PHP_SELF?hal=$hal_akhir&cari=$cari\">"; ?>
            <img src='images/last.png' style='width: 24px;' /></a>
         </div>
</div></div>		

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


							</div>
								<?php include 'footer.php';?>
						</div>
				<!--//content-inner-->
<?php include 'menu.php'; ?>
</body>
</html>
<?php
    $token=$_GET['token'];
    if($token==md5('reset')){
        echo '<script type="text/javascript">alert("<br />PASSWORD berhasil di Reset ke: 123456<br />Terima Kasih")</script>';
    } else if($token==md5('hapus')) {
        echo '<script type="text/javascript">alert("<br />User berhasil dihapus<br />Terima Kasih")</script>';  
    } 
?>