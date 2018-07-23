<!DOCTYPE php>
<php>
	<head>
	    <link rel="icon" href="images/logo.jpg">	
		<title>Projects</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/php5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/projectpopup.css" />		
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

							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/RaspberryPi.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a onClick="openPopup(this);">Pi Apache</a></h3>
										<p>This very website</p>

                                        <div id="div1" class="popup" style="display:none;">
                                           This is a test message div1
                                        <div class="cancel" onclick="closePopup();"></div>
                                       </div>


                                         <button onClick="openPopup(this);">open div2</button>

                                         <div id="div2" class="popup" style="display:none;">
                                            This is a test message div2
                                         <div class="cancel" onclick="closePopup();"></div>
                                        </div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/PepperTab.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="contact.php" class="link"></a>Pepper Tab</h3>
									</header>
								</article>		
								<article>
									<span class="image">
										<img src="images/RaspberryPi.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="project.php" class="link">Handheld console / Unix Machine</a></h3>
										<p>Have a look at the projects i have worked on</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/PS1.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="contact.php" class="link"></a>Retro Console</h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/Script.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="project.php" class="link">Scripting</a></h3>
										<p>Have a look at the projects i have worked on</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/android.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="contact.php" class="link">Custom OS for android Devices</a></h3>
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
			<script src="assets/js/projectpopup.js"></script>				
	</body>
</php>