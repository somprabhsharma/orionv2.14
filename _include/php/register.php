<?php include 'users_connectivity.php';//select the table 

?>
<html>
<head>
<link rel="shortcut icon" href="../_include/img/favicon.png" type="image/png"><link rel="shortcut icon" href="http://www.orion14.co.in/favicon.png" type="image/png">
<link rel="shortcut icon" type="image/png" href="http://www.orion14.co.in/favicon.png" />
<link href="http://fonts.googleapis.com/css?family=Spinnaker&subset=latin" rel="stylesheet" type="text/css">
<style type="text/css">
#a
{
	font-family:'Spinnaker', sans-serif;
}
</style>
</head>
<body>



  <?php
  session_start();
  $userno=$_SESSION['userid'];
		@$eventtype=$_POST['eventtype'];
		if($eventtype==0)
		{
			die(header("location:../../eventreg.php?loginFailed=true&reason=eventtype"));
		}
		else
		{
		  @$eventtype=$_POST['eventtype'];
		  if($eventtype==1)
		{
			$event="Altezza";
			 @$eventname=$_POST['eventname1'];
		}
		 else if($eventtype==2)
		{
			$event="Jarvis";
			 @$eventname=$_POST['eventname2'];
		}
		 else if($eventtype==3)
		{
			$event="Cybotronics";
			 @$eventname=$_POST['eventname3'];
		}
		else if($eventtype==4)
		{
			$event="Mechalive";
			 @$eventname=$_POST['eventname4'];
		}
		  else if($eventtype==5)
		{
			$event="Artistic";
			 @$eventname=$_POST['eventname5'];
		}
		  else if($eventtype==6)
		{
			$event="Fun Events";
			 @$eventname=$_POST['eventname6'];
		}
			  else if($eventtype==7)
		{
			$event="Literaro";
			 @$eventname=$_POST['eventname7'];
		}
			  else if($eventtype==8)
		{
			$event="Pradarshini";
			 @$eventname=$_POST['eventname8'];
		}
				  else if($eventtype==9)
		{
			$event="Workshops & Seminar";
			 @$eventname=$_POST['eventname9'];
		}
				  else if($eventtype==10)
		{
			$event="Prefest Workshops";
			 @$eventname=$_POST['eventname10'];
		}
		   @$teammember=$_POST['team'];
		  @$tm2_userid=$_POST['user2'];
		  @$tm2_name=$_POST['name2'];
		  @$tm2_email=$_POST['email2'];
		  @$tm2_mobno=$_POST['mob2'];
		  @$tm3_userid=$_POST['user3'];
		  @$tm3_name=$_POST['name3'];
		  @$tm3_email=$_POST['email3'];
		  @$tm3_mobno=$_POST['mob3'];
		  @$tm4_userid=$_POST['user4'];
		  @$tm4_name=$_POST['name4'];
		  @$tm4_email=$_POST['email4'];
		  @$tm4_mobno=$_POST['mob4'];
	  	  @$sql = "INSERT INTO events VALUES ('','$userno','$event','$eventname','$teammember','$tm2_userid','$tm2_name','$tm2_email','$tm2_mobno','$tm3_userid','$tm3_name','$tm3_email','$tm3_mobno','$tm4_userid','$tm4_name','$tm4_email','$tm4_mobno')";
		  $result=mysql_query($sql);
		  if($result)
		  {
			 ?>
			<br><br><br><br><br><br><br><br><br><br>
			<center><span id="a">Thank You, Your Details Has Been Submitted.<br><br>
				<span>
			<span><a href="../../eventreg.php">Click here</a> to register for more events<span>
			<span><a href="logout.php">Click Here</a> to LOGOUT <span>
</center>
					</center>
             <!--<script>
			  alert('Signup process complete.');
			  window.location ='eventreg.html';
			  </script>-->
              <?php
		  }
		  else
		  {
			  ?>
			  <span id="a"><br><span>
			  <script>alert('error!');</script>
		 <?php
          }
	  }
 mysql_close();
	 
  ?>
</body>
</html>
