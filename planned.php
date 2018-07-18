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
    <title>Planned Projects</title>
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
                    <h1>Planned Projects</h1>
                  </header>
                  <span class="image main"><img src="images/pic11.jpg" alt="" /></span>
                  <p></p>
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
  background-image: url("images/PepperTab.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("images/android.jpg");
  min-height: 100%;
}

.bgimg-3 {
  background-image: url("images/PS1.jpg");
  min-height: 100%;
}

.bgimg-4 {
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
  <h3 style="text-align:center;">Pepper Tab</h3>
  <p> This project is essentially a custom tablet built using a Raspberry Pi as its core. Unfortunately I have put this on hold for the moment purely due to cost of parts and lack of time to work on this.</p> 
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="font-size:25px;color: #f7f7f7;">Android modifications</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color: #ddd;background-color:#242943;text-align:center;padding:50px 80px;text-align: justify;">
    <p>I always want the latest software on my personal devices, Unfortunalty Android devices are not supported for as long as they last physically so i (where i can) modify my devices to ensure they are as up to date as possible.</p>
    <p>This involes things such as, Kernel Modifications, Android system modifications (Frameworks), System Tuning and debloating, Creating TWRP compatible Scripts with required checks (to avoid bricking).</p>
	</div>
</div>

<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="font-size:25px;color: #f7f7f7;">PS1 Retro-Console emulator</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#242943;text-align:center;padding:50px 80px;text-align: justify;">
    <p>Converting a dead PS1 to a function linux server and a retro console with the ability to still use the disk drive to load original PS1 games. This will be done using a arm based computer. This project is in preliminary stages. Will update once i have done more.</p>
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
	  <script src="assets/js/popupbox.js"></script>
<?php
include_once "everypage/login.php";
?>	  
</body>
</php>