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
										<h3>Pi Apache</h3>
										<p>This very website</p>
										<p></p>
                                         <button onClick="openPopup('div1');">View Project Files</button>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/PepperTab.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Pepper Tab</h3>
										<p></p>
                                         <button onClick="openPopup('div2');">View Project Files</button>
										</header>
								</article>		
								<article>
									<span class="image">
										<img src="images/wiiu.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Handheld console / Unix Machine</h3>
										<p>Have a look at the projects i have worked on</p>
										<p></p>
                                         <button onClick="openPopup('div3');">View Project Files</button>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/PS1.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Retro Console</h3>
										<p></p>
                                         <button onClick="openPopup('div4');">View Project Files</button>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/Script.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Scripting</h3>
										<p>Have a look at the projects i have worked on</p>
										<p></p>
                                         <button onClick="openPopup('div5');">View Project Files</button>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/android.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Custom OS for android Devices</h3>
										<p></p>
                                         <button onClick="openPopup('div6');">View Project Files</button>
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
                                         <div id="div1" class="popup" style="display:none;">
                                         <div class="cancel" onclick="closePopup();">x</div>                                            
											<h3>Test1</h3>
											<p> Below is the hostname of this server </p>
											<?php
echo gethostname(); // may output e.g,: sandie

// Or, an option that also works before PHP 5.3
echo php_uname('n'); // may output e.g,: sandie
?>	
                                        </div>
										
                                         <div id="div2" class="popup" style="display:none;">
                                         <div class="cancel" onclick="closePopup();">x</div>                                           
											<h3>Test2</h3>
										 <embed src="/web/viewer.html?file=../Files/Download/PepperTab.pdf" style="width:100%; height:87%"></embed>											
                                        </div>

                                         <div id="div3" class="popup" style="display:none;">
                                         <div class="cancel" onclick="closePopup();">x</div>                                            
											<h3>Test3</h3>
                                        </div>	

                                         <div id="div4" class="popup" style="display:none;">
                                         <div class="cancel" onclick="closePopup();">x</div>                                            
											<h3>Test4</h3>
                                        </div>

                                         <div id="div5" class="popup" style="display:none;">
                                         <div class="cancel" onclick="closePopup();">x</div>                                             
											<h3>Test5</h3>
                                        </div>

                                         <div id="div6" class="popup" style="display:none;">
                                         <div class="cancel" onclick="closePopup();">x</div>  
										    <h3>Test6</h3>
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