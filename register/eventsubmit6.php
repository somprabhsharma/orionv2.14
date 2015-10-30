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
 
 $emailid=$_SESSION['emailid'];
  $sql1="SELECT * FROM reg_users WHERE emailid ='$emailid'";
  $result1=mysql_query($sql1);
  $rows=mysql_fetch_array($result1);
  $userid=$rows['userid'];

@$table_name=$_POST['eventname'];
@$topic=$_POST['topic'];
$query="Select sn from $table_name order by sn desc";
$result=mysql_query($query);
$data=mysql_fetch_array($result);
	@$sn=$data[0]+1;
	@$tmem1=$rows['fullname'];
		@$userid1=$rows['userid'];
		@$mobno=$rows['mobno'];
		  @$password=$_POST['password'];
		    @$confirmpassword=$_POST['confirmpassword'];
		 If($confirmpassword==$password)
		 {
	  	  @$sql = "INSERT INTO $table_name VALUES ('$sn','$tmem1','$userid1','$mobno','$emailid','$topic')";
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
