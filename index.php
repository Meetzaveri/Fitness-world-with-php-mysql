<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fitness World</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
 <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /> -->
	<!-- <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css"> -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Asap_400.font.js"></script>
<script src="js/Coolvetica_400.font.js"></script>
<script src="js/Kozuka_M_500.font.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/FF-cash.js"></script>
<script>
$(window).load(function(){
	$('.slider')._TMS({
	prevBu:'.prev',
	nextBu:'.next',
	pauseOnHover:true,
	pagNums:false,
	duration:800,
	easing:'easeOutQuad',
	preset:'Fade',
	slideshow:7000,
	pagination:'.pagination',
	waitBannerAnimation:false,
	banners:'fade'
	})
}) 	
</script>
</head>
<body>

<div class="container-fluid"> 
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			
			<a class="navbar-brand" href="index.php"><h2>FITNESS WORLD</h2></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
		
				
		
				<li><a href="register.php" style="margin-top: 24%;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
     <li><a href="login.php" style="margin-top: 26%;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	
			</ul>
		</div>
  <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
		<div class="main">

  <!--==============================header=================================-->

  <header>
    
    
    <nav>
      
      <ul class="menu">
        <li class="current"><a href="index.php">Home</a></li>
        <li><a href="trainings.php">Trainings</a></li>
        <li><a href="timetable.php">Timetable</a></li>
        <li><a href="nutrition.php">Nutrition</a></li>
       
        <li><a href="mainprograms.php">Main Programs</a></li>
        <li><a href="contacts.php">Contact Us</a></li>
        <li><a href="alertlogin.php">Admin Panel</a></li>
      </ul>
    </nav>
    </nav>
  </header>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_12">
        <div class="slider">
          <ul class="items">
            <li><img class="img-responsive" src="images/fitness-1.png" alt="">
              <div class="banner">
                <p class="font-1">Special<span>Program</span></p>
                <p class="font-2">Have a good look around our website and to our special bootcamp program of 12 days every month.</p>
                </div>
            </li>
            <li><img class="img-responsive" src="images/fitness3.png" alt="">
              <div class="banner">
                <p class="font-1">Get Free<span>Training</span></p>
                <p class="font-2">A large gym packed with cardiovascular equipment, resistance muscular machines, a large free weights area with dumbells, barbells,  benches, functional training zones with olympic lifting platforms and much more.</p>
                 </div>
            </li>
            <li><img class="img-responsive" src="images/fitness_3.png" alt="">
              <div class="banner">
                <p class="font-1">Join<span>our team</span></p>
                <p class="font-2">We welcome the young & old, the super fit and the very deconditioned and everyone in between. </p>
                 </div>
            </li>
          </ul>
          <div class="pagination">
            <ul>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="grid_12 top-1">
        <div class="block-1 box-shadow">
          <p class="font-3">

Fitness World is about 24 x 7 Service. Our members can enjoy full use of any gym all day and all night. So whether you are a night owl or an early bird you now have the option of joining us at any time of the day for a quick workout or need some advice or diet plan. So get up, get moving, get active.
</p>
        </div>
      </div>
      <div class="grid_12 top-1">
        <div class="box-shadow">
          <div class="wrap block-2">
            <div class="col-1">
              <h2 class="p3"><span class="color-1">Our</span> motto</h2>
              <div class="wrap box-1"> <img src="images/page1-img1.jpg" alt="" class="img-border img-indent">
                <div class="extra-wrap">
                  <p class="p2"><strong>
                         Discover Your
                         Own Strength
                         </strong> </p>
                  <p>Our dedication to personal fitness is demonstrated by providing each client with top of the line equipment, a comfortable environment and a free consultation with any of our highly qualified personal trainers. Motivation is our middle name!</p>
                </div>
              </div>
              <div class="wrap box-1 top-2"> <img src="images/page1-img2.jpg" alt="" class="img-border img-indent">
                <div class="extra-wrap">
                  <p><strong>Focus will be on you</strong></p>
                  <p>If you’re prepared to listen and put in some effort, we can guarantee amazing results and our qualified instructors and personal trainers are always on hand to support you.</p>
                </div>
              </div>
            </div>
            <div class="col-2">
              <h2 class="p3"><span class="color-1">Services</span> list</h2>
              <ul class="list-1">
                <li>Group Fitness</li>
                <li>Personal Training</li>
                <li>Aquatic Center</li>
                <li>Senior Memberships</li>
                <li>PRO Rehabilitation</li>
              </ul>
              
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
  <!--==============================footer=================================-->
  <footer>
    <p>© 2017 Fitness World</p>
    <p>Website by <a target="_blank" href="#" class="link">CS Boys</a></p>
  </footer>
</div>
	</div>

</div>

</body>
</html>

