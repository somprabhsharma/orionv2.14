
<?php include '_include/php/users_connectivity.php';//select the table 

?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Orion V2.14 | Origin of New idEEEas</title>   

<meta name="auther" content="Som Prabh Sharma a.k.a. Mr. WorldWide" />
<meta name="description" content="A Technical Feista Organised by IEEE in Govt. Engg. College, Ajmer" />
<meta naem="keywords" content="Orion V2.14, Orion 2k13, Technical Festival, Tech Test, GECA, Govt. Engg. College Ajmer, Ajmer, ECA, 
technology, competitions, events, workshop, exhibition, science, fest, technical, tech, college fest, IEEE, IEEE Student Chapter, IEEE Delhi Zone,
 Tech Fest in India, Tech fest in ajmer, RTU" />

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   
<meta name="alexaVerifyID" content="1B9_BD2GMfqYCI224DXSjCl_SGs" />
<meta name="msvalidate.01" content="6D3CB4FE798722C8DD0C558DA3994495" />

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Image Slider-->
 <!--<link href="_include/css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="_include/js/js-image-slider.js" type="text/javascript"></script>
    <link href="_include/css/generic.css" rel="stylesheet" type="text/css" />
    <!--<style type="text/css">
        .cap  {width:190px;height:240px;display:inline-block;background:white url(_include/img/slideshow/caption1.gif) no-repeat 0 0;border-radius:4px;}
        .cap2 {background-image:url(_include/img/slideshow/caption2.gif)}
        .cap3 {background-image:url(_include/img/slideshow/caption3.gif)}
        .cap4 {background-image:url(_include/img/slideshow/caption4.gif)}
    </style>-->


<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<!--<link rel="shortcut icon" href="#">-->
<link rel="shortcut icon" href="_include/img/favicon.png" type="image/png">


<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="_include/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

</head>
<body>
 <?php
  session_start();
  $emailid=$_SESSION['emailid'];
  $sql1="SELECT * FROM reg_users WHERE emailid ='$emailid'";
  $result1=mysql_query($sql1);
  $rows=mysql_fetch_array($result1);
  if ($rows)
 {

			 ?>
		
<!-- This section is for Splash Screen -->
<!--<div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->

<!-- The contents (if there's no contents the ribbon acts as a link) -->
		

<!-- End of curtain -->



<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
        	<a id="goUp" href="#home-slider" title="Orion V2.14 | Origin of New idEEEas">Orion V2.14</a>
        </div>
        
        <nav id="menu">
        	<ul id="menu-nav">
            	<li><a href="index.html" class="external">HOME</a></li>
				<li><a href="overview.html" class="external">Overview</a></li>
				<!--<li><a href="#notice">NOTICE</a></li>-->
				  <li class="current"><a href="registration.php" class="external">REGISTRATION</a></li>
                <li><a href="events.html" class="external">EVENTS</a></li>
                <!--<li><a href="#contact">CONTACT US</a></li>-->
				<li><a href="_include/php/logout.php" class="external">Logout</a></li>
				<!--<li><a href="shortcodes.html" class="external">Shortcodes</a></li>-->
            </ul>
        </nav>
        
    </div>
</header>
<div id="contact" class="page-alternate1">
<div class="container">
    <!-- Title Page -->
    <div class="row">
			 <?php
  $fullname=$rows['fullname'];
  $userid=$rows['userid'];
  ?>
        <div class="span12">
            <div class="title-page">
				  <h2 class="title">Event Registration</h2>
				  <h2 class="title-description">Welcome <?php echo $fullname ?>. Your RegID is ORION14_<?php echo $userid ?> &nbsp;&nbsp;&nbsp;<a href="_include/php/logout.php"><img src="_include/img/logout_button.png"/></a></h2>
			<a class="fancybox fancybox.iframe" href="register/registered.php"><h2 class="title-description" style="color:blue"> Click here to see in which event you have participated. </h2></a>
			</div>
			<div class="subheader-separator"></div>
		</div>
	</div>
<!--	<div class="row">
	<div class="span12">
	<a class="fancybox fancybox.iframe" href="register/registered.php"><h2 class="title-description"> Click here to see in which you have participated. </h2></a>
	</div>
	</div>-->
    <!-- End Title Page -->
    <!-- Contact Form -->
    <div class="row">
    	<div class="span12">
		<marquee style="font-family:comic sans ms">Green Canvas and Musical events has been added in Mech-Civilion and Fun Events. For Exhibition registration check literary events tab.</marquee>
                
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a href="#tab1" data-toggle="tab">Electronics</a></li>
                        <li><a href="#tab2" data-toggle="tab">Programming</a></li>
                        <li><a href="#tab3" data-toggle="tab">Mech-Civilion</a></li>
						 <li><a href="#tab4" data-toggle="tab">Robotics</a></li>
                        <li><a href="#tab5" data-toggle="tab">Fun Events</a></li>
                        <li><a href="#tab6" data-toggle="tab">Literary</a></li>
						<li><a href="#tab7" data-toggle="tab">Artishow</a></li>
						<li><a href="#tab8" data-toggle="tab">Workshops</a></li>
						<li><a href="#tab9" data-toggle="tab">Lan Gamming</a></li>
			
                    </ul>
                 
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1">
					
				
						<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/circuiteria.php"><img src="_include/img/event/circuiteria1.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/electromania.php"><img src="_include/img/event/electromania1.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/matlab.php"><img src="_include/img/event/matlab.jpg"/></a>
						</div>
						<div class=span2>
						<a class="fancybox fancybox.iframe" href="register/ignitron.php"><img src="_include/img/event/ignitron1.jpg"/></a>
						</div>
						</div>
						<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/circuiteria.php">Register</a> for Circuiteria
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/electromania.php">Register</a> for Electromania
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/matlab.php">Register</a> for Master-Rock-Matlab
						</div>
						<div class=span2>
						<a class="fancybox fancybox.iframe" href="register/ignitron.php">Register</a> for Ignitron
						</div>
						</div>
                        </div>
                        <div class="tab-pane fade in" id="tab2">
                           	<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/bugothon.php"><img src="_include/img/event/bug o thon.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/googledia.php"><img src="_include/img/event/googledia quizz.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/threecodifers.php"><img src="_include/img/event/threecodifers.jpg"/></a>
						</div>
						<div class=span2>
						<a class="fancybox fancybox.iframe" href="register/webista.php"><img src="_include/img/event/webista.jpg"/></a>
						</div>
						</div>
						<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/bugothon.php">Register</a> for Bug-O-Thon
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/googledia.php">Register</a> for Googledia
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/threecodifers.php">Register</a> for Three Codifers
						</div>
						<div class=span2>
						<a class="fancybox fancybox.iframe" href="register/webista.php">Register</a> for Webista
						</div>
						</div>
                        </div>
                        <div class="tab-pane fade in" id="tab3">
                            	<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/cardstruction.php"><img src="_include/img/event/card3.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/taqneeq.php"><img src="_include/img/event/teq2.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/waver.php"><img src="_include/img/event/waver2.jpg"/></a>
						</div>
						<div class=span2>
						<a class="fancybox fancybox.iframe" href="register/greencanvas.php"><img src="_include/img/event/greencanvas.jpg"/></a>
						</div>
						</div>
						<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/cardstruction.php">Register</a> for Cardstruction
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/taqneeq.php">Register</a> for Taqneeq
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/waver.php">Register</a> for Waver
						</div>
						<div class=span2>
						<a class="fancybox fancybox.iframe" href="register/greencanvas.php">Register</a> for Green Canvas
						</div>
						</div>
                        </div>
						<div class="tab-pane fade in" id="tab4">
                       	<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/line_apostle.php"><img src="_include/img/event/line.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/kill_o_zone.php"><img src="_include/img/event/robolympis.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/robo_race.php"><img src="_include/img/event/Robot-Race.jpg"/></a>
						</div>
						<div class=span2>
						<a class="fancybox fancybox.iframe" href="register/robo_soccer.php"><img src="_include/img/event/robot-wars.jpg"/>
						</div>
						</div>
						<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/line_apostle.php">Register</a> for Line Apostle
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/kill_o_zone.php">Register</a> for Kill O Zone
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/robo_race.php">Register</a> for Robo Race
						</div>
						<div class=span2>
						<a class="fancybox fancybox.iframe" href="register/robo_soccer.php">Register</a> for Robo Soccer
						</div>
						</div>
                        </div>
                        <div class="tab-pane fade in" id="tab5">
                           	<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/bouquetmaking.php"><img src="_include/img/event/bouquetmaking.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/admadshow.php"><img src="_include/img/event/ad-mad-show.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/secondtofame.php"><img src="_include/img/event/60secondtofame.jpg"/></a>
						</div>
						<div class=span2>
						<a class="fancybox fancybox.iframe" href="register/scavengerhunt.php"><img src="_include/img/event/scavenger_hunt.jpg"/></a>
						</div>
						</div>
						<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/bouquetmaking.php">Register</a> for Bouquet Making
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/admadshow.php">Register</a> for Ad Mad Show
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/secondtofame.php">Register</a> for 60 Second to Frame
						</div>
						<div class=span2>
						<a class="fancybox fancybox.iframe" href="register/scavengerhunt.php">Register</a> for Scavanger Hunt
						</div>
						</div>
							<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/treasurehunt.php"><img src="_include/img/event/treasurehunt.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/dancemasti.php"><img src="_include/img/event/dancemasti.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/finalticket.php"><img src="_include/img/event/final ticket.jpg"/></a>
						</div>
						<div class=span2>
						<a class="fancybox fancybox.iframe" href="register/musical.php"><img src="_include/img/event/musical.jpg"/></a>
						</div>
						</div>
						<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/treasurehunt.php">Register</a> for Treasure Hunt
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/dancemasti.php">Register</a> for Dance Masti
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/finalticket.php">Register</a> for Final Ticket
						</div>
						<a class="fancybox fancybox.iframe" href="register/musical.php">Register</a> for Musical events
						</div>
                        </div>
                        <div class="tab-pane fade in" id="tab6">
                            		<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/expresso.php"><img src="_include/img/event/extempore.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/bestowal.php"><img src="_include/img/event/paper.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/technoquasi.php"><img src="_include/img/event/techquizlit.jpg"/></a>
						</div>
						<div class=span2>
						<a class="fancybox fancybox.iframe" href="register/techwhirl.php"><img src="_include/img/event/writing.jpg"/></a>
						</div>
						</div>
						<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/expresso.php">Register</a> for Expresso
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/bestowal.php">Register</a> for Bestowal
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/technoquasi.php">Register</a> for Techno Quassi
						</div>
						<div class=span2>
						<a class="fancybox fancybox.iframe" href="register/techwhirl.php">Register</a> for Techwhirl
						</div>
						</div>
						<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/warofwranglers.php"><img src="_include/img/event/debate.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/exhibition.php"><img src="_include/img/event/pradarshini.jpg"/></a>
						</div>
						</div>
						<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/warofwranglers.php">Register</a> for War of wranglers
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/exhibition.php">Register</a> for Exhibition
						</div>
						</div>
                        </div>
						        <div class="tab-pane fade in" id="tab7">
                          	<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/photomontage.php"><img src="_include/img/event/photography.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/technicoskartun.php"><img src="_include/img/event/cartoonist.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/teknikacolaz.php"><img src="_include/img/event/collage.jpg"/></a>
						</div>
						<div class=span2>
						<a class="fancybox fancybox.iframe" href="register/docudrama.php"><img src="_include/img/event/documentry.jpg"/>
						</div>
						</div>
						<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/photomontage.php">Register</a> for Photomontage
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/technicoskartun.php">Register</a> for Technicos Kartun
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/teknikacolaz.php">Register</a> for Teknika Colaz
						</div>
						<div class=span2>
						<a class="fancybox fancybox.iframe" href="register/docudrama.php">Register</a> for Docu-Drama
						</div>
						</div>
                        </div>
						  
						        <div class="tab-pane fade in" id="tab8">
								<div class="row">
                          	<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/android.php"><img src="_include/img/event/android.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/cadarena.php"><img src="_include/img/event/cadarena.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/networksecurity.php"><img src="_include/img/event/network.jpg"/></a>
						</div>
						<div class=span2>
						
						</div>
						</div>
						<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/android.php">Register</a> for Android
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/cadarena.php">Register</a> for Card Arena
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/networksecurity.php">Register</a> for Network Security
						</div>
						<div class=span2>
						
						</div>
						</div>
                        </div>
						<div class="tab-pane fade in" id="tab9">
						<div class="row">
                          	<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/counterstrike.php"><img src="_include/img/event/counterstrike.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/needforspeed.php"><img src="_include/img/event/needforspeed.jpg"/></a>
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/pockettank.php"><img src="_include/img/event/pockettanks.jpg"/></a>
						</div>
						<div class=span2>
						
						</div>
						</div>
						<div class=row>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/counterstrike.php">Register</a> for Counter Strike
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/needforspeed.php">Register</a> for Need for Speed
						</div>
						<div class=span3>
						<a class="fancybox fancybox.iframe" href="register/pockettank.php">Register</a> for Pocket Tank
						</div>
						<div class=span2>
						
						</div>
						</div>
                        </div>
                    </div>
		</div>
        	
    </div>
	<?php
		session_start();
		$_SESSION[emailid]=$emailid;
	?>
    <!-- End Contact Form -->
	    <!-- Title Page -->
		<br>
			<div class="row">
		<div class="span4"></div>
		<div class="span4">
		<div class="accordion-inner">
                             <a href="../_include/img/agenda/agenda.pdf">Click here</a> to download the pdf of Agenda (Schedule) of the events of all 3 days.
                            </div>
		
		</div>
		</div>
    <div class="row">
	<div class="span1">
	</div>
        <div class="span12">
			<div class="subheader-separator"></div>
		</div>
	</div>
	   </div>
    <!-- End Title Page -->
</div>

<!-- End Contact Section -->


<footer>
<p class="credits">&copy;2014 <a href="http://www.orion14.co.in" title="Orion V2.14 | Origin of New idEEEas">Orion</a>, A Website Designed by a Team of 
	<a href="http://www.facebook.com/meetmr.worldwide" target="_blank" title="Mr. WorldWide">Som Prabh Sharma</a>, <a href="http://www.facebook.com/gopalkildoliya" target="_blank" title="Gopal 
	Kildoliya">Gopal Kildoliya</a> and <a href="http://www.facebook.com/aditya.verma.54" target="_blank" title="Aditya Verma">Aditya Verma</a></p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->
<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="_include/js/supersized.3.2.7.min.js"></script><!-- Slider -->
<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script><!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.js"></script><!-- Fancybox for Media -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="_include/js/main.js"></script> <!-- Default JS -->


<!-- End Js -->
<?php
	}
	else
	{
	 ?>
			<script> window.location='registration.php'</script>
			
			 
			  <?php
 }
?>
</body>
</html>
