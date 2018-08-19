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
		 <div class="preloader"></div>
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
										<p>Touch interface based Linux machine</p>
                                         <button onClick="openPopup('div2');">View Project Files</button>
										</header>
								</article>		
								<article>
									<span class="image">
										<img src="images/wiiu.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Console / Linux Machine</h3>
										<p>Handheld linux/gaming machine/p>
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
                                         <button onClick="openPopup('div4');">View Project Files</button>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/Script.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Scripting</h3>
										<p>Customise windows installations</p>
										<p></p>
                                         <button onClick="openPopup('div5');">View Project Files</button>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/android.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Smart Doorbell</h3>
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
											<h3></h3>
											<h2 class="">Pi Apache</h2>
											<p> This Webserver is running across a cluster of 6 Raspberry Pi Zero's and a single Raspberry Pi 3B+. Amazingly the average daily cost to run this setup only comes to around £8 a year. This setup involves running haproxy as a loadbalancer. The main URL points to the 3B+ which then redirects the traffic to one of the 6 PiZero's. The hostname below will show which raspberry pi you are using to view this page. Try accessing the site from another device and you will see that the hostname changes.</p>
											<p> <?php echo php_uname('n');?> is the hostname of this server </p>

											<p>This base wesbite was originally forked from a project known as "HTML5UP" by Forty. I used this website as a learning curve to be able to edit someone elses existing work since i find that i learn better by breaking code then making code from scratch. I stopped working on the original website when i reached a point that i could add new things to the site using things i have learnt so hopefully as time goes on i will continue to add/modify this website to a point that it is nothing like the original.</p>

											<p>You can also have a look at the original version of this site be visiting the legacy site using this link</p>
											<a href="http://legacy.vithusel.me" class="button next" target="_blank">Legacy Website</a>
											<p></p>
											<p> To view the sourcecode for this website and the legacy at my Github profile which you can find by clicking the link below</p>
											<a href="https://github.com/vithusel/vithusel2.0" class="button next" target="_blank">View Source Code</a>											
											
                                        </div>
										
                                         <div id="div2" class="popup" style="display:none;">
                                         <div class="cancel" onclick="closePopup();">x</div>                                           
											<h3></h3>
											<h2 class="">Pepper Tab</h2>
										 <embed src="/web/viewer.html?file=../Files/Download/PepperTab.pdf" style="width:100%; height:71%"></embed>											
                                        </div>

                                         <div id="div3" class="popup" style="display:none;">
                                         <div class="cancel" onclick="closePopup();">x</div>                                            
											<h3></h3>
											<h2 class="">Console / Linux Machine</h2>
                                        </div>	

                                         <div id="div4" class="popup" style="display:none;">
                                         <div class="cancel" onclick="closePopup();">x</div>                                            
											<h3></h3>
											<h2 class="">Retro Console</h2>

                                        <div id="slideshow">
                                           <div>
                                             <img src="/images/PiStation/1.jpg" style="background-size: 100% 100px; height: 100%; width: 100%">
                                           </div>
                                           <div>
                                             <img src="/images/PiStation/2.jpg" style="background-size: 100% 200px; height: 100%; width: 100%">
                                           </div>
                                           <div>
                                              <img src="/images/PiStation/3.jpg" style="background-size: 100% 200px; height: 100%; width: 100%">
                                           </div>
                                           <div>
                                              <img src="/images/PiStation/4.jpg" style="background-size: 100% 200px; height: 100%; width: 100%">
                                           </div>
                                           <div>
                                              <img src="/images/PiStation/5.jpg" style="background-size: 100% 200px; height: 100%; width: 100%">
                                           </div>										   
                                        </div>
                                        <p>test text</p>
                                        </div>

                                         <div id="div5" class="popup" style="display:none;">
                                         <div class="cancel" onclick="closePopup();">x</div>                                             
											<h3></h3>
											<h2 class="">Scripting</h2>
										<p>This script consisted of Batch, Powershell mainly. i created this script to automate the setup of machines at my workplace so that i wouldnt have to spend as much time focusing on setting up machines and to be able to improve my efficiency. At the time of making this script i was unable to use a alternative tool such as windows ADK or SCCM due to the nature of the machines setup. However i am now working toward/learning how to use Windows ADK to be able to improve my automation even more when combined with a modified script.   	
                                        </div>

                                         <div id="div6" class="popup" style="display:none;">
                                         <div class="cancel" onclick="closePopup();">x</div>  
											<h3></h3>
											<h2 class="">Smart Doorbell</h2>
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
			<script src="assets/js/slideshow.js"></script>			
	</body>
</php>