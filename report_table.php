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
								<h3>Hasil Klasifikasi</h3>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>		
								
<?php
            $cari=$_GET['cari'];
            $hal=$_GET['hal'];
        ?>
        <!-- <form action="training_view.php?cari=$cari" method="get">
                <table><tr><td><span><input type="text" name="cari" value="<?php echo $cari; ?>" class="input-sm form-control" placeholder="cari Kabupaten" style="height:35px;"></span></td><td>&nbsp;
                <input type="submit" name="search" class="btn btn-sm btn-default" style="width: 100px;height: 45px;margin-top: -3px;" value="CARI" /></td></tr></table>
        </form><br /> -->

        <form method="get" position: relative; left: 30px; action="report.php">
                <button style="position:relative; left:920px; bottom:5px;" class="btn btn-primary btn-md" type="submit">Report</button>
        </form>

					<?php
        $batas=5;

        if($cari==''){
            $sql="SELECT username FROM testing";
        } else {
            $sql="SELECT username FROM testing WHERE nama_kabupaten like '%".$cari."%'";
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
            $sql="SELECT * FROM testing ORDER BY nama_kabupaten, nama_desa ASC LIMIT $posisi, $batas";
        } else {
            $sql="SELECT * FROM testing WHERE nama_kabupaten like '%".$cari."%' ORDER BY nama_kabupaten, nama_desa ASC LIMIT $posisi, $batas";
        }
        
        ?>

													
														  <div class="graph"  style="overflow-x: auto; white-space: nowrap;">
															<div class="tables">
																<table class="table"> 
																	<thead> 
																		<tr> 
																			<th>No</th> 
                                                                            <th>Kabupaten</th>
                                                                            <th>Desa</th>
                                                                            <th>I1</th>
                                                                            <th>I2</th>
                                                                            <th>I3</th>
                                                                            <th>I4</th>
                                                                            <th>I5</th>
                                                                            <th>I6</th>
                                                                            <th>I7</th>
                                                                            <th>I8</th>
                                                                            <th>I9</th>
                                                                            <th>I10</th>
                                                                            <th>I11</th>
                                                                            <th>I12</th>
                                                                            <th>I13</th>
                                                                            <th>I14</th>
                                                                            <th>I15</th>
                                                                            <th>I16</th>
                                                                            <th>I17</th>
                                                                            <th>I18</th>
                                                                            <th>I19</th>
                                                                            <th>I20</th>
                                                                            <th>I21</th>
                                                                            <th>I22</th>
                                                                            <th>I23</th>
                                                                            <th>I24</th>
                                                                            <th>I25</th>
                                                                            <th>I26</th>
                                                                            <th>I27</th>
                                                                            <th>I28</th>
                                                                            <th>I29</th>
                                                                            <th>I30</th>
                                                                            <th>I31</th>
                                                                            <th>I32</th>
                                                                            <th>I33</th>
                                                                            <th>I34</th>
                                                                            <th>I35</th>
                                                                            <th>I36</th>
                                                                            <th>I37</th>
                                                                            <th>I38</th>
                                                                            <th>I39</th>
                                                                            <th>I40</th>
                                                                            <th>I41</th>
                                                                            <th>I42</th>
                                                                            <th>Kategori</th>
                                                                            <!-- <th>AKSI</th>  -->
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
                                                                                echo '<td>'.$hsl['nama_kabupaten'].'</td>';
                                                                                echo '<td>'.$hsl['nama_desa'].'</td>';
                                                                                echo '<td>'.$hsl['I1'].'</td>';
                                                                                echo '<td>'.$hsl['I2'].'</td>';
                                                                                echo '<td>'.$hsl['I3'].'</td>';
                                                                                echo '<td>'.$hsl['I4'].'</td>';
                                                                                echo '<td>'.$hsl['I5'].'</td>';
                                                                                echo '<td>'.$hsl['I6'].'</td>';
                                                                                echo '<td>'.$hsl['I7'].'</td>';
                                                                                echo '<td>'.$hsl['I8'].'</td>';
                                                                                echo '<td>'.$hsl['I9'].'</td>';
                                                                                echo '<td>'.$hsl['I10'].'</td>';
                                                                                echo '<td>'.$hsl['I11'].'</td>';
                                                                                echo '<td>'.$hsl['I12'].'</td>';
                                                                                echo '<td>'.$hsl['I13'].'</td>';
                                                                                echo '<td>'.$hsl['I14'].'</td>';
                                                                                echo '<td>'.$hsl['I15'].'</td>';
                                                                                echo '<td>'.$hsl['I16'].'</td>';
                                                                                echo '<td>'.$hsl['I17'].'</td>';
                                                                                echo '<td>'.$hsl['I18'].'</td>';
                                                                                echo '<td>'.$hsl['I19'].'</td>';
                                                                                echo '<td>'.$hsl['I20'].'</td>';
                                                                                echo '<td>'.$hsl['I21'].'</td>';
                                                                                echo '<td>'.$hsl['I22'].'</td>';
                                                                                echo '<td>'.$hsl['I23'].'</td>';
                                                                                echo '<td>'.$hsl['I24'].'</td>';
                                                                                echo '<td>'.$hsl['I25'].'</td>';
                                                                                echo '<td>'.$hsl['I26'].'</td>';
                                                                                echo '<td>'.$hsl['I27'].'</td>';
                                                                                echo '<td>'.$hsl['I28'].'</td>';
                                                                                echo '<td>'.$hsl['I29'].'</td>';
                                                                                echo '<td>'.$hsl['I30'].'</td>';
                                                                                echo '<td>'.$hsl['I31'].'</td>';
                                                                                echo '<td>'.$hsl['I32'].'</td>';
                                                                                echo '<td>'.$hsl['I33'].'</td>';
                                                                                echo '<td>'.$hsl['I34'].'</td>';
                                                                                echo '<td>'.$hsl['I35'].'</td>';
                                                                                echo '<td>'.$hsl['I36'].'</td>';
                                                                                echo '<td>'.$hsl['I37'].'</td>';
                                                                                echo '<td>'.$hsl['I38'].'</td>';
                                                                                echo '<td>'.$hsl['I39'].'</td>';
                                                                                echo '<td>'.$hsl['I40'].'</td>';
                                                                                echo '<td>'.$hsl['I41'].'</td>';
                                                                                echo '<td>'.$hsl['I42'].'</td>';
                                                                                echo '<td>'.$hsl['kategori'].'</td>';
                                                                                echo "<td><a href=\"testing_hapus.php?id_training=$hsl[id_training]\"><u>Hapus</u></a></td>";
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
    $msg = $_GET['msg'];
    if($msg==md5('hapus')) {
        echo '<script type="text/javascript">alert("<br />Data Training berhasil dihapus<br />Terima Kasih")</script>';  
    } 
?>