<!DOCTYPE php>
<php>
	<head>
	    <link rel="icon" href="images/logo.jpg">	
		<title>Projects</title>
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

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style2">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1>Projects</h1>
							</header>
							<div class="content">
								<p>Below you can find a bunch of things that i am or will be tinkering with.</p>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- Two -->
							<section id="two" class="spotlights">
								<section>
									<a class="image">
										<img src="images/Script.jpg" alt="" data-position="center center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Past Projects</h3>
											</header>
											<p>Highlights of projects i have completed in the past</p>
											<ul class="actions">
												<li><a href="past.php" class="button">HighLights</a></li>
											</ul>
										</div>
									</div>
								</section>
								<section>
									<a class="image">
										<img src="images/raspicam.jpg" alt="" data-position="top center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Current Projects</h3>
											</header>
											<p>Have a look at things im currently working on (including this very website)</p>
											<ul class="actions">
												<li><a href="current.php" class="button">Have a peek!</a></li>
											</ul>
										</div>
									</div>
								</section>
								<section>
									<a class="image">
										<img src="images/PepperTab.jpg" alt="" data-position="25% 25%" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Planned Projects</h3>
											</header>
											<p>Things i have planned for the future</p>
											<ul class="actions">
												<li><a href="planned.php" class="button">Interested?</a></li>
											</ul>
										</div>
									</div>
								</section>
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