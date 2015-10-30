<?php include '_include/php/users_connectivity.php';//select the table 

?>
<?php 
session_start();
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
<link type='text/css' href='_inlcude/css/contact1.css' rel='stylesheet' media='screen' />
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
				  <li class="current"><a href="#eventregister">Event Register</a></li>
				  <li><a href="registration.php" class="external">Registration</a></li>
                <!--<li><a href="events.html#events" class="external">EVENTS</a></li>-->
				<li><a href="about.html" class="external">ABOUT US</a></li>
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->
		<div class="ex-form ui-helper-clearfix ui-corner-all">
			<h1>Registration Form</h1>
			<form action="_include/php/register.php" method="POST">
				<div id="panel1" class="form-panel ui-helper-hidden">
				  <h2>Event Registration Form</h2>
					<fieldset class="ui-corner-all">
						<label>
							<span class="title">Event Type:</span>
							<span class="select"><select name="eventtype" id="eventtype"><option value"0"></option><!--<option value="1">Altezza</option><option value="2">Jarvis</option><option value="3">Cybotronics</option>
							<option value="4">Mechalive</option><option value="5">Artistic</option><option value="6">Fun Events</option><option value="7">Literaro</option>
							<option value="8">Pradarshini</option><option value="9">Workshops & Seminar</option>--><option value="10">Prefest Workshops</option>
							</select></span>
						</label>
						<br><br><br>
						<div id="eventname">
					<fieldset class="ui-corner-all">	
					<div id=prefest>
					<span class="title">Event Name:</span>
						  <span class="select"><select name="eventname10" id="a"><option value="Robotics">Robotics</option><option value="Nework Security">Network Security</option>
							</select></span></span>
						  
					</div>
					<!--<div id=altezza>
					<span class="title">Event Name:</span>
						  <span class="select"><select name="eventname1" id="a"><option value="Circuiteria">Circuiteria</option><option value="Ignitron">Ignitron</option><option value="Imminentia">Imminentia</option><option value="Electro Fever">Electro Fever</option>
							<option value="Electro Mania">Electro Mania</option><option value="Gadgetron">Gadgetron</option>
							</select></span></span>
						  
					</div>
					<div id=jarvis>
					<span class="title">Event Name:</span>
						  <span class="select"><select name="eventname2" id="b"><option value="Algorythm">Algorythm</option><option value="Bug-O-Thon">Bug-O-Thon</option><option value="Design Your Thoughts">Design Your Thoughts</option><option value="Bull's Eye">Bull's Eye</option>
							<option value="Code Master">Code Master</option><option value="Crack-O-Dile">Crack-O-Dile</option><option value="Mathelatics">Mathelatics</option><option value="Play it Loud">Play it Loud</option>
							<option value="Googledia Quiz">Googledia Quiz</option>
							</select></span></span>
						  
					</div>
					<div id=cybotronics>
					<span class="title">Event Name:</span>
						  <span class="select"><select name="eventname3" id="c"><option value="Line Apostle">Line Apostle</option><option value="Pin-O-Mania">Pin-O-Mania</option><option value="Costworld's Robolympics">Costworld's Robolympics</option><option value="Humanoid League">Humanoid League</option>
							</select></span></span>
						  
					</div>
					<div id=mechalive>
					<span class="title">Event Name:</span>
						  <span class="select"><select name="eventname4" id="d"><option value="Waver">Waver</option><option value="Taqneeq">Taqneeq</option><option value="Westin-O-Bridge">Westin-O-Bridge</option><option value="Cardstruction">Cardstruction</option>
							</select></span></span>
						 
					</div>
					<div id=artistic>
					<span class="title">Event Name:</span>
						  <span class="select"><select name="eventname5" id="e"><option value="Photomontage">Photomontage</option><option value="Teknikacolaz">Teknikacolaz</option><option value="Docudrama">Docudrama</option><option value="Technicoskartun">Technicoskartun</option>
							</select></span></span>
						  
					</div>
					<div id=funevents>
					<span class="title">Event Name:</span>
						  <span class="select"><select name="eventname6" id="f"><option value="Ad Mad Show">Ad Mad Show</option><option value="Colour on Fabric">Colour on Fabric</option><option value="FInal Ticket">FInal Ticket</option><option value="Momento">Momento</option>
							<option value="Catch 'em Up">Catch 'em Up</option><option value="Beat the Clock Time">Beat the Clock Time</option><option value="Sonnet">Sonnet</option><option value="Quick Mania">Quick Mania</option>
							<option value="Dance Masti">Dance Masti</option><option value="Fata Poster Nikla Hero">Fata Poster Nikla Hero</option>
							</select></span></span>
						 
					</div>
					<div id=literaro>
					<span class="title">Event Name:</span>
						  <span class="select"><select name="eventname7" id="g"><option value="War of Wranglers">War of Wranglers</option><option value="Expresso">Expresso</option><option value="Bestowal (paper)">Bestowal (paper)</option<option value="Bestowal (ppt)">Bestowal (ppt)</option>
							<option value="Technoquassi">Technoquassi</option><option value="Techwhirl">Techwhirl</option>
							</select></span></span>
						  
					</div>
					<div id=pradarshini>
					<span class="title">Event Name:</span>
						  <span class="select"><select name="eventname8" id="h"><option value="Exhibition">Exhibition</option>
						</select></span></span>

					</div>
					<div id=workshop>
					<span class="title">Event Name:</span>
						  <span class="select"><select name="eventname9" id="i"><option value="Robotics">Robotics</option><option value="Network Security">Network Security</option>
						</select></span></span>
						  
					</div>-->
				</fieldset>
				</div>

						<!--<label>
							<span class="title">No. Of Team Members:</span>
							<span class="select"><select name="team" id="steam"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></span>
						</label>
						<br><br><br><br>
				<div id="team">
					<h2><font color="white">Team Details <br> <font size="-3" > (Only one member should register for team) </font></font></h2>
					<fieldset class="ui-corner-all">	
						<div id=t2>
						  <h3>Team Member #2</h3>
						    <label>
							  <span class="title">UserID:</span>
							  <span class="input"><input type="text" value=""  id="user2" name="user2" class="input1"></span>
							  
						  </label>
						  <br><br><br><br>
						  
						  <label>
							  <span class="title">Name:</span>
							  <span class="input"><input type="text" value=""  id="name2" name="name2" class="input1"></span>
						  </label>
						  <br><br><br><br>
						  <label>
							  <span class="title">Email:</span>
							  <span class="input"><input type="text" value=""  id="email2" name="email2" class="input1"></span>
						  </label>
						  <br><br><br><br>
						  <label>
							  <span class="title">Mobile:</span>
							  <span class="input"><input type="text" value=""  id="mob2" name="mob2" class="input1"></span>
						  </label>
						  <br><br><br><br>
						</div>
						<div id=t3>
						  <h3>Team Member #3</h3>
						  	  <label>
							  <span class="title">UserID:</span>
							  <span class="input"><input type="text" value=""  id="user3" name="user3" class="input1"></span>
						  </label>
						 
						  <br><br><br><br>
						  <label>
							  <span class="title">Name:</span>
							  <span class="input"><input type="text" value=""  id="name3" name="name3" class="input1"></span>
						  </label>
						  <br><br><br><br>
						  <label>
							  <span class="title">Email:</span>
							  <span class="input"><input type="text" value=""  id="email3" name="email3" class="input1"></span>
						  </label>
						  <br><br><br><br>
						  <label>
							  <span class="title">Mobile:</span>
							  <span class="input"><input type="text" value=""  id="mob3" name="mob3" class="input1"></span>
						  </label>
						  <br><br><br><br>
					
						</div>
						<div id=t4>
						  <h3>Team Member #4</h3>
						    <label>
							  <span class="title">UserID:</span>
							  <span class="input"><input type="text" value=""  id="user4" name="user4" class="input1"></span>
						  </label>
						  
						  <label>
							  <span class="title">Name:</span>
							  <span class="input"><input type="text" value=""  id="name4" name="name4" class="input1"></span>
						  </label>
						  <br><br><br><br>
						  <label>
							  <span class="title">Email:</span>
							  <span class="input"><input type="text" value="" id="email4" name="email4" class="input1"></span>
						  </label>
						  <br><br><br><br>
						  <label>
							  <span class="title">Mobile:</span>
							  <span class="input"><input type="text" value=""  id="mob4" name="mob4" class="input1"></span>
						  </label>
						  <br><br><br><br>
						</div>
				</fieldset>
				</div>-->
					</fieldset>
					
				</div>
				
				<div id="thanks" class="form-panel ui-helper-hidden">
				  <h2>Almost Done</h2>
					<fieldset class="ui-corner-all">
					<br><br><br><input type="submit" id="submit" value="Submit">
					</fieldset>
					<?php $reasons = array("eventtype" => "Select an event type first"); if ($_GET["loginFailed"]) echo $reasons[$_GET["reason"]]; ?>
				</div>
				
			</form>
			
<!--	<span id="eteam">You have selected a team event</span>
		<span id="emob1">Please Fill A Valid Mobile Number</span>
		<span id="ecol1">Please Fill In A Valid College</span>
		<span id="eemail1">Please Fill In A Valid Email Adress</span>
		<span id="ebranch">Please Fill A Valid Branch<br>e.g. ECE</span>
		<span id="esemester">Please Fill In A Valid Semester<br> e.g. 5</span>
		<span id="epassword">Please Fill In A Valid Password<br> size(8 to 13)</span>
		<span id="econfirmpassword">Password Do Not Match</span> -->
		<!--<span id="ename2">Please Fill In A Valid Name<br> For Team Member #2</span>
		<span id="emob2">Please Fill A Valid Mobile Number<br> For Team Member #2</span>
		<span id="ecol2">Please Fill In A Valid College<br> For Team Member #2</span>
		<span id="eemail2">Please Fill In A Valid Email Adress<br> For Team Member #2</span>
		<span id="ename3">Please Fill In A Valid Name<br> For Team Member #3</span>
		<span id="emob3">Please Fill A Valid Mobile Number<br> For Team Member #3</span>
		<span id="ecol3">Please Fill In A Valid College<br> For Team Member #3</span>
		<span id="eemail3">Please Fill In A Valid Email Adress<br> For Team Member #3</span>
		<span id="ename4">Please Fill In A Valid Name<br> For Team Member #4</span>
		<span id="emob4">Please Fill A Valid Mobile Number<br> For Team Member #4</span>
		<span id="ecol4">Please Fill In A Valid College<br> For Team Member #4</span>
		<span id="eemail4">Please Fill In A Valid Email Adress<br> For Team Member #4</span>
		<!--<span id="use">Please Enter A Username</span>
		<span id="er1">Sorry, The Username Is Taken.<br> Please Choose Another</span>
		<span id="event">Please Select At Least One Event</span>
		<span id="spojm">You Have Selected Bytes.<br> Please Enter Your CodeChef ID</span>   -->
			<button id="next">Next <span>&#9654;</span></button><button id="back" disabled="disabled"><span>&#9664;</span> Back</button> 
		</div>
		<script type="text/javascript" src="_include/js/jquery.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#back').css("display","none");
				$('#usernameLoading').hide();
				$('#thanks').hide();
				$('#eteam').hide();
				$('#use').hide();
				$('#ename2').hide();
				$('#emob2').hide();
				$('#eemail2').hide();
				$('#ecol2').hide();
				$('#ename3').hide();
				$('#emob3').hide();
				$('#eemail3').hide();
				$('#ecol3').hide();
				$('#ename4').hide();
				$('#emob4').hide();
				$('#eemail4').hide();
				$('#ecol4').hide();
				$('#event').hide();
				$('#spojm').hide();
				$('#er1').hide();
				var q=0;
				var i=0;
				$('#team').hide();
				$('#eventname').hide();
				$('#ver').removeClass('.form-panel');
				$(".ex-form button").click(function(e) {
					e.preventDefault();
					$('#use').hide();
					$('#spojm').hide();
					$('#event').hide();
					$('#ename2').hide();
					$('#emob2').hide();
					$('#eemail2').hide();
					$('#ecol2').hide();
					$('#ename3').hide();
					$('#emob3').hide();
					$('#eemail3').hide();
					$('#ecol3').hide();
					$('#ename4').hide();
					$('#emob4').hide();
					$('#eemail4').hide();
					$('#ecol4').hide();
					$('#er1').hide();
				
					if($(this).attr('id')=='next')
					{
						if(i==0)
						{
							r=p1check();
							if(r==1)
							{	$('#next').css("display","none");
								$('#panel2').hide();
								$('#thanks').fadeIn(2000);
								++i;
								$('#next').attr('disabled','disabled')
							}
						}
					}
				
					else if($(this).attr('id')=='back')
					{
						if(i==2)
						{	$('#next').css("display","block");
							$('#thanks').hide();
							$('#panel2').fadeIn(2000);
							--i;
							$('#next').attr('disabled',null);
						}
						else if(i==1)
						{	$('#back').css("display","none");
							$('#panel2').hide();
							$('#panel1').fadeIn(2000);
							--i;
							$('#back').attr('disabled','disabled');
							$('#next').attr('disabled',null);
						}
					}
					});
				function p1check()
				{
					var e=$('#eventtype').val();
					var w=$('#steam').val();
					var ph=/^[0-9\-\+]+$/;
					var em=/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					var na=/^[a-zA-Z\ ]+$/;
					var a2=$('#name2').val();
					var a3=$('#name3').val();
					var a4=$('#name4').val();
					var b2=$('#email2').val();
					var b3=$('#email3').val();
					var b4=$('#email4').val();
					var c2=$('#mob2').val();
					var c3=$('#mob3').val();
					var c4=$('#mob4').val();
					var d2=$('#user2').val();
					var d3=$('#user3').val();
					var d4=$('#user4').val();
			if(e!=0)
					{
					if(w==1)
					{
						
						if(!na.test(a2))
						{
							$('#ename2').fadeIn(1000);
							return 0;
						}
						if(!em.test(b2))
						{
							$('#eemail2').fadeIn(1000);
							return 0;
						}
						if(!ph.test(c2)||c2.length<10)
						{
							$('#emob2').fadeIn(1000);
							return 0;
						}
						if(d2.length>4)
						{
							$('#ecol2').fadeIn(1000);
							return 0;
						}
					}
					else if(w==2)
					{
						
						if(!na.test(a2))
						{
							$('#ename2').fadeIn(1000);
							return 0;
						}
						if(!em.test(b2))
						{
							$('#eemail2').fadeIn(1000);
							return 0;
						}
						if(!ph.test(c2)||c2.length<10)
						{
							$('#emob2').fadeIn(1000);
							return 0;
						}
						if(d2.length>4)
						{
							$('#ecol2').fadeIn(1000);
							return 0;
						}
						if(!na.test(a3))
						{
							$('#ename3').fadeIn(1000);
							return 0;
						}
						if(!em.test(b3))
						{
							$('#eemail3').fadeIn(1000);
							return 0;
						}
						if(!ph.test(c3)||c3.length<10)
						{
							$('#emob3').fadeIn(1000);
							return 0;
						}
						if(d3.length>4)
						{
							$('#ecol3').fadeIn(1000);
							return 0;
						}
					}
					else if(w==3)
					{
					
						if(!na.test(a2))
						{
							$('#ename2').fadeIn(1000);
							return 0;
						}
						if(!em.test(b2))
						{
							$('#eemail2').fadeIn(1000);
							return 0;
						}
						if(!ph.test(c2)||c2.length<10)
						{
							$('#emob2').fadeIn(1000);
							return 0;
						}
						if(d2.length>4)
						{
							$('#ecol2').fadeIn(1000);
							return 0;
						}
						if(!na.test(a3))
						{
							$('#ename3').fadeIn(1000);
							return 0;
						}
						if(!em.test(b3))
						{
							$('#eemail3').fadeIn(1000);
							return 0;
						}
						if(!ph.test(c3)||c3.length<10)
						{
							$('#emob3').fadeIn(1000);
							return 0;
						}
						if(d3.length>4)
						{
							$('#ecol3').fadeIn(1000);
							return 0;
						}
						if(!na.test(a4))
						{
							$('#ename4').fadeIn(1000);
							return 0;
						}
						if(!em.test(b4))
						{
							$('#eemail4').fadeIn(1000);
							return 0;
						}
						if(!ph.test(c4)||c4.length<10)
						{
							$('#emob4').fadeIn(1000);
							return 0;
						}
						if(d4.length>4)
						{
							$('#ecol4').fadeIn(1000);
							return 0;
						}
					}
					return 1;
				}
				else
				{
				return 0;
				}
			}
				$('#eventtype').change(function() {
					if($(this).val()!=0)
					{
						$('#eventname').slideDown(1000);
						if($(this).val()==10)
						{
							$('#prefest').show();
							//$('#altezza').hide();
							//$('#jarvis').hide();
							//$('#cybotronics').hide();
							//$('#mechalive').hide();
							//$('#artistic').hide();
							//$('#funevents').hide();
							//$('#literaro').hide();
							//$('#pradarshini').hide();
							//$('#workshop').hide();
							//$('#next').attr('disabled',null);-->
						}
						//else if($(this).val()==2)
						{
							$('#altezza').hide();
							$('#jarvis').show();
							$('#cybotronics').hide();
							$('#mechalive').hide();
							$('#artistic').hide();
							$('#funevents').hide();
							$('#literaro').hide();
							$('#pradarshini').hide();
							$('#workshop').hide();
								$('#next').attr('disabled',null);
						}
						//else if($(this).val()==3)
						{
							$('#altezza').hide();
							$('#jarvis').hide();
							$('#cybotronics').show();
							$('#mechalive').hide();
							$('#artistic').hide();
							$('#funevents').hide();
							$('#literaro').hide();
							$('#pradarshini').hide();
							$('#workshop').hide();
								$('#next').attr('disabled',null);
						}
						//else if($(this).val()==4)
						{
							$('#altezza').hide();
							$('#jarvis').hide();
							$('#cybotronics').hide();
							$('#mechalive').show();
							$('#artistic').hide();
							$('#funevents').hide();
							$('#literaro').hide();
							$('#pradarshini').hide();
							$('#workshop').hide();	
							('#next').attr('disabled',null);
						}
						//else if($(this).val()==5)
						{
							$('#altezza').hide();
							$('#jarvis').hide();
							$('#cybotronics').hide();
							$('#mechalive').hide();
							$('#artistic').show();
							$('#funevents').hide();
							$('#literaro').hide();
							$('#pradarshini').hide();
							$('#workshop').hide();
								$('#next').attr('disabled',null);
						}
						//else if($(this).val()==6)
						{
							$('#altezza').hide();
							$('#jarvis').hide();
							$('#cybotronics').hide();
							$('#mechalive').hide();
							$('#artistic').hide();
							$('#funevents').show();
							$('#literaro').hide();
							$('#pradarshini').hide();
							$('#workshop').hide();
								$('#next').attr('disabled',null);
						}
						//else if($(this).val()==7)
						{
							$('#altezza').hide();
							$('#jarvis').hide();
							$('#cybotronics').hide();
							$('#mechalive').hide();
							$('#artistic').hide();
							$('#funevents').hide();
							$('#literaro').show();
							$('#pradarshini').hide();
							$('#workshop').hide();
								$('#next').attr('disabled',null);
						}
						//else if($(this).val()==8)
						{
							$('#altezza').hide();
							$('#jarvis').hide();
							$('#cybotronics').hide();
							$('#mechalive').hide();
							$('#artistic').hide();
							$('#funevents').hise();
							$('#literaro').hide();
							$('#pradarshini').show();
							$('#workshop').hide();
								$('#next').attr('disabled',null);
						}
						//else if($(this).val()==9)
						{
							$('#altezza').hide();
							$('#jarvis').hide();
							$('#cybotronics').hide();
							$('#mechalive').hide();
							$('#artistic').hide();
							$('#funevents').hide();
							$('#literaro').hide();
							$('#pradarshini').hide();
							$('#workshop').show();
								$('#next').attr('disabled',null);
						}
						
					}
				
					else
						{
							$('#next').attr('disabled','disabled');
							$('#event').slideUp();
						}
				});
				$('#steam').change(function() {
					if($(this).val()!=0&& $(this).val()!='p')
					{
						$('#team').slideDown(1000);
						if($(this).val()==1)
						{
							$('#t2').show();
							$('#t3').hide();
							$('#t4').hide();
							$('#next').attr('disabled',null);
						}
						else if($(this).val()==2)
						{
							$('#t2').show();
							$('#t3').show();
							$('#t4').hide();
							$('#next').attr('disabled',null);
						}
						else if($(this).val()==3)
						{
							$('#t2').show();
							$('#t3').show();
							$('#t4').show();
							$('#next').attr('disabled',null);
						}
					}
					else if($(this).val()==0)
					{
						$('#team').slideUp();
						$('#next').attr('disabled',null);
					}
					else
						{
							$('#next').attr('disabled','disabled');
							$('#team').slideUp();
						}
				});
});
		</script>
		<script type='text/javascript' src='_include/js/jquery.simplemodal.js'></script>
		<!--<script type="text/javascript" src="contact.js"></script>-->
	</body>
</html>

 <!---->