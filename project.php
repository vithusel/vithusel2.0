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

<style>
body, php {
  height: 100%;
  margin: 0;
}

.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4{
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("images/RaspberryPi.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("images/securitysystem.jpg");
  min-height: 100%;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4 {
        background-attachment: scroll;
    }
}
</style>
</head>
<body>

<div class="bgimg-1">
  <div class="caption">
    <span class="border">Pi Apache</span>
  </div>
</div>

<div style="color: #ddd;background-color:#242943;text-align:center;padding:50px 80px;text-align: justify;">
  <p>This website you are currently on is being run off of a Raspberry pi running Raspbian Apache. The original site is based off of "HTML5UP's" design which i have heavily edited. My hopes for this site is a teaching tool for myself to learn some basic web design languages such as python and java you can see the code for this site on my Github</p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="font-size:25px;color: #f7f7f7;">Smart Home Security</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color: #ddd;background-color:#242943;text-align:center;padding:50px 80px;text-align: justify;">
    <p>One of the projects im currently working on it smartifiying my home using the raspberry pi. Although there a plenty of exisiting solutions available i intend on with starting one from scratch or modifying a existing system to include the following:	</p>
    <ul>
	   <li>Nightvision camera</Li>
       <li>Ability to check the identity of person within the property</Li>
       <li>Ability to notify my phone when a unauthorised person has been detected</Li>
       <li>Heat sensor to act as secondary alarm to notify my of fire if no-one is home</Li>
	</div>
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