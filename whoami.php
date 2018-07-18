<!DOCTYPE php>
<php>
	<head>
	    <link rel="icon" type="image/jpg" href="images/logo.jpg">	
		<title>Who am i?</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/php5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/login.css" />	
		<link rel="stylesheet" href="assets/css/popupbox.css" />			
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
										<h1>Who am i?</h1>
									</header>
									<span class="image right body"><img src="images/selfie.jpg" alt="img" /></span>
									<p>I began my IT Career working in computers shops across Croydon, in some cases working free of charge in return for training. This helped me to learn how to repair various electronics by the use of problem tracing. I have working on devices ranging from Macbook Pro's to Cheap android tablets. I welcomed every task as each repair was a new lesson for myself. These skills i now use in DIY home projects such as modding older consoles or repairing my collection of vintage computers (Which im slowly growing)</p>
									<p>The Second part to my Career came in the form of a level 3 apprenticeship in Networking and hardware which was then followed by working as a network engineering / support contractor. Contracting allowed me to lightly dip my feet into various sectors withing IT, I have had the opportunity to talk to people like System Admins (Linux and Windows), Programmers and even a Devops Engineer. I used my time contracting to help build a picture of where i want to be and set in motion the tasks required to help me acieve my goals/ </p>
									    <h1>What those goals are you ask?</h1>
									<p>I want to be a Devops Engineer since i don't like being fixed to one sector and Devops engineers are required to work in a lot of different sectors such as scripting and sysadmin to do this i'm currently doing a level 4 Networking Apprenticeship, This involves learning Cisco networking as well as all the fundamentals to system security. Whilst doing this i am also self training php, CSS, Python, Bash and Powershell. Two of these im learning by actually creating something such as this Website which i will improve as my skills do. I also intend to train for AWS Admin, Google Cloud Admin, SQL Databases and do a Microsoft MCSA Certification. as well as learning Java and maybe some .</p>
									<p> Most of the above things i don't want to do because it will get me good money or help me settle in life but because i want to be able to understand how things such as Cloud platforms work and to be able to tinker with my own linux servers and create Systems such as Home Automation for my own home. 
								<h1>Have a look at my CV</h1>
                                 <!-- Trigger/Open The Modal -->
                                 <button id="myBtnpopup">Preview CV</button>

                                 <!-- The Modal -->
                                 <div id="myModalpopup" class="modalpopup">

                                 <!-- Modal content -->
                                 <div class="modal-contentpopup">
                                 <span class="closepopup">&times;</span>
                                 <embed src="/web/viewer.html?file=../Files/Download/CV.pdf" style="width:100%; height:87%"></embed>	
                                 <a href="/Files/Download/CV.pdf" download="Vithurshan Selvarajah - CV">
    	                         <button class="btnpopup" style="width:100%"><i class="fa fa-download"></i> Download</button>
                                 </a>

                                 </div>


							</section>

					</div>

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
			<script src="assets/js/popupbox.js"></script>
<?php
include_once "everypage/login.php";
?>
	</body>
</php>