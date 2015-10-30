<?php include '_include/php/users_connectivity.php';//select the table 

?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<html>
<head>

<!-- Meta Tags -->
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

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">


<!-- Font Icons -->
<link href="_include/css/fonts.css" rel="stylesheet">

<!-- Responsive -->
<link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
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
			<script> window.location='eventreg.php'</script>
			
			 
			  <?php
 }
else
 {
?>



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
			<!--<li><a href="#overview">OVERVIEW</a></li>-->
				  <li class="current"><a href="#registration">REGISTRATION</a></li>
				<!--<li><a href="#notice">NOTICE</a></li>-->
            <li><a href="events.html" class="external">EVENTS</a></li> 
             <!--   <li><a href="index.html#contact" class="external">CONTACT US</a></li> -->
				<li><a href="aboutus.html" class="external">ABOUT US</a></li>
				<!--<li><a href="shortcodes.html" class="external">Shortcodes</a></li>-->
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->
<div id="registration" class="page-alternate6">
<div class="container">
<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Registration</h2>
                    <h3 class="title-description">Fill up the from to register for an event</a>.</h3>
                </div>
					<div class="subheader-separator"></div>
            </div>
        </div>
        <!-- End Title Page -->
		<div class="row">
<div class="span3"></div>
		<div class="spna8">
<a href="newuser.html" class="buttonnew">
    <span>New User Registration</span>
</a>
</div>
</div>
<div class="row">
<div class="span3"></div>
		<div class="spna8">
<a href="login.php" class="buttonnew">
    <span> If Already RegistereD </span>
</a>
</div>

</div>
</div>
</div>

<!-- Socialize -->
<div id="social-area" class="page-alternate">
	<div class="container">
    	<div class="row">
           <!-- <div class="span4">
                    <ul>
                        <ul><a href="sponsers.html" title="Sponsers" target="_blank"><span><h3><b>SPONSERS</b></h3></span></a></ul>
                    </ul>
            </div>
			   <div class="span4">

                    <ul>
                        <ul><a href="aboutus.html" title="Gallary" target="_blank"><span><h3><b>GALLARY</b></h3></span></a></ul>
                    </ul>
            </div>
			   <div class="span4">

                    <ul>
                        <ul><a href="webteam.html" title="WEB TEAM" target="_blank"><span><h3><b>WEB TEAM</b></h3></span></a></ul>
                    </ul>
            </div>-->
        </div>
    </div>
</div>
<!-- End Socialize -->
<!-- Footer -->
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
<script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<!--<script src="_include/js/main.js"></script> <!-- Default JS -->

<!-- End Js -->
<?php
}?>
</body>
</html>