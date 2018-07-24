<!DOCTYPE php>
<php>
<?php
include_once "everypage/header.php";
?>
	<head>
	    <link rel="icon" type="image/jpg" href="images/logo.jpg">
		<title>Home Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/php5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/login.css" />		
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner" style="display: hidden">
							<header class="major" >
								<h1>Hi, my name is Vit</h1>  
								<span class="image">
										<img src="images/pic12.jpg" alt="" />
									</span>
							</header>
							<div class="content">
								<p>I am a Network Engineer and a Junior Sys Admin </p>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">
						
						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>About me</h2>
									</header>
									<p>I am a IT enthusiast. I have worked from computer shops to MSP's. I am called a tinkerer by many who know me and that comes from my curiosity to know all. My skills range from Board repair to Cisco Networking and windows scripting.</p>
									<ul class="actions">
										<li><a href="whoami.php" class="button next">Find out more</a></li>
									</ul>
								</div>
							</section>

					</div>		
					<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/Script.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="past.php" class="link">Past Projects</a></h3>
										<p>What i have acompished in the past</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/RaspberryPi.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="current.php" class="link">Current Projects</a></h3>
										<p>Things im currently working on</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/PepperTab.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="planned.php" class="link">Planned Projects</a></h3>
										<p>Whats in the pipeline?</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/contactme.png" alt="" />
									</span>
									<header class="major">
										<h3><a href="contact.php" class="link"></a>Contact Details</h3>
									</header>
								</article>								
							</section>

				<!-- Footer -->
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
<?php
include_once "everypage/login.php";
?>
	</body>
</php>