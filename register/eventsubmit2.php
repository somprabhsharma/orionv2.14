<?php include '../_include/php/users_connectivity.php';//select the table 
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
  @$tmem2=0;
		  @$userid2=0;
		  @$tmem3=0;
		  @$userid3=0;
		  @$tmem4=0;
		  @$userid4=0;
		  @$userid5=0;
		  @$tmem5=0;
		  @$userid6=0;
		  @$tmem6=0;
		  @$userid7=0;
		  @$userid7=0;
		  @$tmem8=0;
		  @$userid8=0;
		  @$tmem9=0;
		  @$userid9=0;
		   @$tmem10=0;
		  @$userid10=0;
		  
		  
  $emailid=$_SESSION['emailid'];
  $sql1="SELECT * FROM reg_users WHERE emailid ='$emailid'";
  $result1=mysql_query($sql1);
  $rows=mysql_fetch_array($result1);
  $userid=$rows['userid'];
@$table_name=$_POST['eventname'];
$query="Select sn from $table_name order by sn desc";
$result=mysql_query($query);
$data=mysql_fetch_array($result);
	@$sn=$data[0]+1;
		@$tname=$_POST['tname'];
		@$tmem1=$rows['fullname'];
		@$userid1=$rows['userid'];
		@$mobno=$rows['mobno'];
		  @$tmem2=$_POST['tmem2'];
		  @$userid2=$_POST['userid2'];
		  @$tmem3=$_POST['tmem3'];
		  @$userid3=$_POST['userid3'];
		  @$tmem4=$_POST['tmem4'];
		  @$userid4=$_POST['userid4'];
		   @$tmem5=$_POST['tmem5'];
		  @$userid5=$_POST['userid5'];
		  @$tmem6=$_POST['tmem6'];
		  @$userid6=$_POST['userid6'];
		  @$tmem7=$_POST['tmem7'];
		  @$userid7=$_POST['userid7'];
		   @$tmem8=$_POST['tmem8'];
		  @$userid8=$_POST['userid8'];
		  @$tmem9=$_POST['tmem9'];
		  @$userid9=$_POST['userid9'];
		  @$tmem10=$_POST['tmem10'];
		  @$userid10=$_POST['userid10'];
		  @$password=$_POST['password'];
		    @$confirmpassword=$_POST['confirmpassword'];
		 If($confirmpassword==$password)
		 {
	  	  @$sql = "INSERT INTO $table_name VALUES ('$sn','$tname','$tmem1','$userid1','$mobno','$tmem2','$userid2','$tmem3','$userid3','$tmem4','$userid4','$tmem5','$userid5','$tmem6','$userid6','$tmem7','$userid7','$tmem8','$userid8','$tmem9','$userid9','$tmem10','$userid10')";
		  $result=mysql_query($sql);
		  if($result)
		  {


			 ?>

		
			<br><br><br><br><br><br><br><br><br><br>
			<center><span id="a">Thank You, You have successfully registered for this event.<br><br>
				<span>

			<span> Now you can close this window. <span>
</center>
					</center>
	
              <?php
		  }
		  else
		  {
			  ?>
			 <br><br><br><br><br><br><br><br><br><br>
			<center><span id="a">Database error please contact web team.<br><br>
				<span>

			<span> Now you can close this window. <span>
</center>
					</center>
			 
		 <?php
          }
	  }
  ?>
</body>
</html>
