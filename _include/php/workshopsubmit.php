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

$query="Select userid from prefest order by userid desc";
$result=mysql_query($query);
$data=mysql_fetch_array($result);

		@$userid=$data[0]+1;
		@$fullname=$_POST['name1'];
		  @$emailid=$_POST['email1'];
		  @$mobno=$_POST['mob1'];
		  @$collname=$_POST['col1'];
		  @$collid=$_POST['col2'];
		  @$branch=$_POST['branch'];
		  @$semester=$_POST['semester'];
		  @$eventtypenew=$_POST['eventtypenew'];
		  @$eventnamenew=$_POST['eventnamenew'];
		 If($confirmpassword==$password)
		 {
	  	  @$sql = "INSERT INTO prefest VALUES ('$userid','$fullname','$emailid','$mobno','$collname','$collid','$branch','$semester','$eventnamenew')";
		  $result=mysql_query($sql);
		  if($result)
		  {
			 ?>

			
			<br><br><br><br><br><br><br><br><br><br>
			<center><span id="a">Thank You, Your Details Has Been Submitted.<br><br>
				<span>
			<span>Your USER ID is : ORION<?php echo $data[0]+1; ?> <span><br>
			<span>Please remember it for future use. Thank You<span><br>
			<span>Click Here to go to <a href="../../index.html">HOME</a>
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
			  <script>alert('Already Registered. Please Register with a different Email ID.');</script>
		 <?php
          }
	  }
  ?>
</body>
</html>
