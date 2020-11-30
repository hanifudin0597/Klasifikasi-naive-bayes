<!DOCTYPE html>
<?php include 'head.php'; ?>
	<script src="js/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/highcharts.js"></script>
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
    <?php
    	include 'koneksi.php';
    	$sumbu_x="'TERTINGGAL', 'BERKEMBANG', 'MANDIRI'"; 

    	$sql="SELECT * FROM training";
    	$hasil=$koneksi->query($sql);
    	$t=0;
    	$b=0;
    	$m=0;
		while($hsl=$hasil->fetch_assoc()){
			if($hsl['kategori']=="TERTINGGAL"){
				$t++;
			} else if($hsl['kategori']=="BERKEMBANG"){
				$b++;
			} else {
				$m++;
			}
		}
		$sumbu_y=$t.",".$b.",".$m;
	?>
        
    <script language="javascript" type="text/javascript">
		$(function grafik(){
    		var chart;
	    	$(document).ready(function(){
    	    	chart = new Highcharts.Chart({
        	    	//Type: line / bar / column
					chart: {renderTo: 'container', type: 'line'},
    	        	title: {text: <?php echo "'GRAFIK DATA TRAINING'"; ?>},
	        	    xAxis: {categories: [<?php echo $sumbu_x; ?>]},
    	        	yAxis: {title: {text: '<?php echo 'Jumlah Desa'; ?>'}, plotLines: [{ value: 0, width: 1, color: '#808080'}]},
	    	        //fungsi tooltip untuk menampikan data di titik tertentu
					tooltip: {formatter: function() {return 'Informasi	: <b>'+ '</b><br/>'+ this.series.name + ' ' + this.x + ' = <b>'+ this.y  +'</b> desa';}},	
					//isi datanya
		            series: [{name: 'Kategori ', data: [<?php echo $sumbu_y; ?>]},
				]});
    		});
		});
	</script>
    <br />
    <div id="container" style="min-width: 50px; height: 450px; margin: 0 auto"></div>    
	</div>

</div>

								<?php include 'footer.php';?>
						</div>
				<!--//content-inner-->
<?php include 'menus.php'; ?>
</body>
</html>