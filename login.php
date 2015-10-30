<?php include '_include/php/users_connectivity.php';//select the table 

?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
	<head>
<link rel="shortcut icon" href="_include/img/favicon.png" type="image/png">

		<link rel="stylesheet" type="text/css" href="_include/css/custom.css">
		<!--[if IE 9]>
			 <style type="text/css">
				.form-panel .input, .form-panel input, .form-panel textarea {
					border-radius: 0;
				}
			 </style>
		<![endif]-->
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
		<!-- cache control-->
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37529769-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<meta http-equiv="expires" value="Tue, 29 Mar 1983 07:20:55 GMT"/>

		<meta http-equiv="Pragma" content="no-cache">
		
		<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
<!-- cache control stop-->
		<!-- Contact Form CSS files -->
<!--<link type='text/css' href='_include/css/contact1.css' rel='stylesheet' media='screen' />-->
	<!--	<noscript><link rel="stylesheet" type="text/css" href="../css/noJS.css"/></noscript> -->

		
	</head>
	<body>
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
				  <li class="current"><a href="#login">Log In</a></li>
				<!--<li><a href="#notice">NOTICE</a></li>-->
				                <li><a href="registration.php" class="external">REGISTRATION</a></li>
                <li><a href="events.html#events" class="external">EVENTS</a></li>
				<li><a href="index.html#about" class="external">ABOUT US</a></li>
            </ul>
        </nav>
        
    </div>
</header>
		<div class="ex-form ui-helper-clearfix ui-corner-all">
			<h1>Registration Form</h1>
			<form method="POST" action="_include/php/check.php">
				<div id="panel1" class="form-panel ui-helper-hidden">
				  <h2>Event Registration Form</h2>
				  <marquee style="font-family:comic sans ms;font-size:14px;">Only activated users can log in. You need to activate your account before log in.</marquee>
					<fieldset class="ui-corner-all">
						<label>
							<span class="title">EmailID:</span>
							
							<span class="input">
							
							<input type="text" value=""  name="emailid" id="emailid" class="input1">
							</span>
						</label>
						<br><br><br>
						<label>
							<span class="title">Password:</span>
							
							<span class="input">
							
							<input type="password" value=""  name="password" id="password" class="input1">
							</span>
							<span id="usernameResult"></span>
						</label>
						<br><br><br>
<input type="submit" id="submit" value="Next">
<span style="font-size:14px">
<?php $reasons = array("password" => "Wrong Username or Password", "blank" => "You have left one or more fields blank."); if ($_GET["loginFailed"]) echo $reasons[$_GET["reason"]]; ?>
</span>

			</form>
			<br><br>
			</div>

			<form method="POST" action="_include/php/resend.php">
				<div id="panel1" class="form-panel ui-helper-hidden">
				  <h2>Resend Confirmation Mail</h2>
				  <marquee style="font-family:comic sans ms;font-size:14px;">If you did not get any confirmation mail yet fill the form below to resend. Thank you !!!</marquee>
					<fieldset class="ui-corner-all">
						<label>
							<span class="title">EmailID:</span>
							
							<span class="input">
							
							<input type="text" placeholder="your registered email id" value=""  name="emailid" id="emailid" class="input1">
							</span>
						</label>
						<br><br><br>
					
<input type="submit" id="submit" value="resend">
<p style="font-size:14px;margin-left:15px;">
<?php $reasons = array("correctemail" => "Confirmation mail has been resent. Check your inbox or spam folder and activate your account.", "blank" => "You have left one or more fields blank."); if ($_GET["sendingDone"]) echo $reasons[$_GET["reason"]]; ?>
<?php $reasons = array("wrongemail" => "This email address does not belong to our database. Please provide your registered email id.", "blank" => "You have left one or more fields blank."); if ($_GET["sendingFailed"]) echo $reasons[$_GET["reason"]]; ?>
</p>
			</form>
	</div>
	</div>
	

</body>
</html>