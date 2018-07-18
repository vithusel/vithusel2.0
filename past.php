<!DOCTYPE php>
<script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "current-mobile.php";
}
//-->
</script>
<php>
  <head>
      <link rel="icon" href="images/logo.jpg">  
    <title>Past Projects</title>
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
                    <h1>Past Projects</h1>
                  </header>
                </div>
              </section>

          </div>

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
  background-image: url("images/Script.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("images/pic12.jpg");
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
    <span class="border">SCROLL DOWN</span>
  </div>
</div>

<div style="color: #ddd;background-color:#242943;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Scripting</h3>
   <p>A script consisting of powershell and CMD commands to be able to automate the setup of enterprise machines with minimal user input. This is made to work across multiple versions of windows as well as different architectures. I have included the ability to be able to check if the machine is a domain machine as well as plenty of other features i have planned.</p>
   <p>Part of the scripts purpose is to be able to install a wide range of applications (Antivirus, Office 2010, etc). The Script is able to check if the application is already installed and carry out various automated actions upon installing applications.</P>  
 </div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Wii U Gamepad Standalone Console</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color: #ddd;background-color:#242943;text-align:center;padding:50px 80px;text-align: justify;">
    <p>I have worked on converting the Wii U controller into a standalone console with full analogy and button functionality. This project was a partial success. At the time of me working on this project i could not find a suitable battery to power the device for extended times. However I will at some point revisit this project to look at the possibility of improving the PSU.</p>
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