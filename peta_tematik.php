<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="images/bps.png">
<title>Badan Pusat Statistik</title>
<div class="head">
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
        <style>
        #map {
            width: 1000px;
            height: 579px;
        }
        </style>
        <title></title>
</div>
</head>
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
								<h3>Peta Tematik</h3>
								<br />
								<div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="data/Indonesia_by_desa_0.js"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-1.0385269696014936,134.98858924938668],[-0.34164483949574415,136.27365439051755]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        function pop_Indonesia_by_desa_0(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['PROVINSI'] !== null ? autolinker.link(feature.properties['PROVINSI'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KECAMATAN'] !== null ? autolinker.link(feature.properties['KECAMATAN'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['DESA'] !== null ? autolinker.link(feature.properties['DESA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SUMBER'] !== null ? autolinker.link(feature.properties['SUMBER'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KODE2010'] !== null ? autolinker.link(feature.properties['KODE2010'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['PROVNO'] !== null ? autolinker.link(feature.properties['PROVNO'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KABKOTNO'] !== null ? autolinker.link(feature.properties['KABKOTNO'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KECNO'] !== null ? autolinker.link(feature.properties['KECNO'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['DESANO'] !== null ? autolinker.link(feature.properties['DESANO'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KABKOT'] !== null ? autolinker.link(feature.properties['KABKOT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Indonesia_by_desa_0_0(feature) {
            switch(String(feature.properties['DESA'])) {
                case 'AMYAS':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'ARURI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,26,28,1.0)',
                interactive: true,
            }
                    break;
                case 'AWAKI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'BINIKI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'DIDIABOLO':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'DOUWBO':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'DUBER':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'FANINDI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'FANJUR':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'IMBIRSBARI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,26,28,1.0)',
                interactive: true,
            }
                    break;
                case 'INEKI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,26,28,1.0)',
                interactive: true,
            }
                    break;
                case 'INSUMBREI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'KOBARI JAYA':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'KOIRYAKAM':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'MANGGONSWAN':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'MAPIA':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,26,28,1.0)',
                interactive: true,
            }
                    break;
                case 'MARSRAM':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'MARYAIDORI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'MASYAI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,26,28,1.0)',
                interactive: true,
            }
                    break;
                case 'MBRUWANDI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,26,28,1.0)',
                interactive: true,
            }
                    break;
                case 'NAPISNDI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,26,28,1.0)',
                interactive: true,
            }
                    break;
                case 'ODORI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'PILOHAYANGA':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'RANTAU BUJUR HILIR':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(172,88,200,1.0)',
                interactive: true,
            }
                    break;
                case 'RAYORI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'SAUYAS':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'SORENDIDORI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'SUMOMPO':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(207,105,218,1.0)',
                interactive: true,
            }
                    break;
                case 'SYURDORI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'WAFOR':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'WARBEFONDI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,26,28,1.0)',
                interactive: true,
            }
                    break;
                case 'WARBOR':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'WARSA':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'WARYEI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'WARYESI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'WAYORI':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,26,28,1.0)',
                interactive: true,
            }
                    break;
                case 'WOMBONDA':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'WONGKEINA':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                case 'YAMNAISU':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,26,28,1.0)',
                interactive: true,
            }
                    break;
                case 'YAWERMA':
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,238,92,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_Indonesia_by_desa_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(20,220,220,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_Indonesia_by_desa_0');
        map.getPane('pane_Indonesia_by_desa_0').style.zIndex = 400;
        map.getPane('pane_Indonesia_by_desa_0').style['mix-blend-mode'] = 'normal';
        var layer_Indonesia_by_desa_0 = new L.geoJson(json_Indonesia_by_desa_0, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Indonesia_by_desa_0',
            layerName: 'layer_Indonesia_by_desa_0',
            pane: 'pane_Indonesia_by_desa_0',
            onEachFeature: pop_Indonesia_by_desa_0,
            style: style_Indonesia_by_desa_0_0,
        });
        bounds_group.addLayer(layer_Indonesia_by_desa_0);
        map.addLayer(layer_Indonesia_by_desa_0);
        setBounds();
        var i = 0;
        layer_Indonesia_by_desa_0.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['DESA'] !== null?String('<div style="color: #000000; font-size: 10pt; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['DESA']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_Indonesia_by_desa_0'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        resetLabels([layer_Indonesia_by_desa_0]);
        map.on("zoomend", function(){
            resetLabels([layer_Indonesia_by_desa_0]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_Indonesia_by_desa_0]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_Indonesia_by_desa_0]);
        });
        </script>
								<!-- <div id="container" style="min-width: 50px; height: 450px; margin: 0 auto"></div>     -->
									</div>

							</div>

				<?php include 'footer.php';?>
			</div>
				<!--//content-inner-->
<?php include 'menus.php'; ?>
</body>
</html>