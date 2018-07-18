<!DOCTYPE php>
<php>
	<head>
	    <link rel="icon" href="images/logo.jpg">	
		<title>Contact me</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/php5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/login.css" />	
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

<?php
include_once "everypage/header.php";
?>
				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Contact me</h1>
									</header>
    <!-- Content --><div id="googleMap" style="width: 100%;height: 400px;"></div>
								<div class="inner">
							<div class="content">
								<p>I am based in Croydon, London.</p>
                                <p>If you would like to contact me feel free to send me a message on <a href="mailto:vithu@live.com">email</a></p> or via <a href="http://www.linkedin.com/in/vithusel">Linkedin</a></p>
      							</div>	
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<h5>Have a look at my Github and Linkedin</h5><li>
								<a href="http://www.github.com/vithusel" target="_blank" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="http://www.linkedin.com/in/vithusel" target="_blank" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>							
							</ul>
							<sub> This website is powered by Raspberry Pi 3 Apache webserver</sub>
							<p></p>
							<sub><small> Design is forked from "HTML5UP" by Forty with my own changes added</small></sub>
							</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.359488,-0.0966222),
    zoom:10,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWecywdkVNE8TZYKBSlGPazItOLOWw4Gc&callback=myMap"></script>
<?php
include_once "everypage/login.php";
?>
	</body>
</php>