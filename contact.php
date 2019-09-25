<!DOCTYPE html>
<html>
<head>
	<title>Контакты | Интернет-магазин "Ортоп"</title>
	<meta name="description" content='Контактная информации.График работы. Карта'/>
	<link type="text/css" rel="stylesheet" media="all" href="css/blue2.css" />
	<link type="text/css" rel="stylesheet" media="all" href="js/prettyPhoto/css/prettyPhoto.css" />
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
</head>

<body>

<?php include "header.php"; ?>
	
	

	<div class="section">
		<div class="container_12">
			
			
			<div class="grid_12">
				<div class="widget">
					<h4 class='contact_h1'>Контакты</h4>
					<div class="contact">
					<address>
						г.Киев<br>
						ул. Киквидзе,2/34(м. Дружбы Народов)<br>
						Email: <a href="mailto:info@ortop.com.ua">info@ortop.com.ua</a><br>
						Phone: <a href="tel:+38099905-33-24">+38099905-33-24</a> <br>
						Phone: <a href="tel:+38093607-34-69">+38093607-34-69</a> 
					</address>					
					<div class="maps"> <img src="images/screen_maps.png" alt="карта" title="карта"></div>
					</div>
				</div>
			</div>			
			<div class="clear"></div>
		</div>
	</div>
	
	<?php include "footer.php"; ?>

	
	<!-- JAVASCRIPTS -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/dm3Slideshow.jquery.js"></script>
	<script type="text/javascript" src="js/dm3FadeSlider.jquery.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.dmTabs.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
		var google_map_div = $("#google_map");
		
		var lat = google_map_div.data('latitude');
		var lon = google_map_div.data('longitude');
		var title = google_map_div.data('title');
	
    	var latlng = new google.maps.LatLng(lat, lon);
    	var myOptions = {
      		zoom: 12,
      		center: latlng,
      		mapTypeId: google.maps.MapTypeId.ROADMAP
    	};
    	var map = new google.maps.Map(document.getElementById("google_map"), myOptions);
    	var companyPos = new google.maps.LatLng(lat, lon);
    	var markerImage = new google.maps.MarkerImage('images/map-marker.png',
			new google.maps.Size(132,41),
			new google.maps.Point(0,0),
			new google.maps.Point(50,50)
		);
		var companyMarker = new google.maps.Marker({
		    position: companyPos,
		    map: map,
		    icon: markerImage,
		    title: title
		});
	</script>
</body>
</html>