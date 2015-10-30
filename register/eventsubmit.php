<?php include '../_include/php/users_connectivity.php';//select the table 




  session_start();
  @$tmem2=0;
		  @$userid2=0;
		  @$tmem3=0;
		  @$userid3=0;
		  @$tmem4=0;
		  @$userid4=0;
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
		  @$password=$_POST['password'];
		   $sql5="SELECT tname FROM $table_name WHERE tname ='$tname'";
  $result5=mysql_query($sql5);
  $rows5=mysql_fetch_array($result5);
  If($rows5)
  {
    die(header("location:$table_name.php?regifailed=true&reason=wrongtname"));
		 
	  }
	    else
	  {
	 $sql2="SELECT userid FROM reg_users WHERE userid ='$userid2'";
  $result2=mysql_query($sql2);
  $rows2=mysql_fetch_array($result2);
  If($rows2)
  {
  If($userid3==0)
  {
    @$confirmpassword=$_POST['confirmpassword'];
		 If($confirmpassword==$password)
		 {
	  	  @$sql = "INSERT INTO $table_name VALUES ('$sn','$tname','$tmem1','$userid1','$mobno','$tmem2','$userid2','$tmem3','$userid3','$tmem4','$userid4')";
		  $result=mysql_query($sql);
		  if($result)
		  {
?>
<script>//alert("You have successfully registered for this event.");
window.location="1.html"</script>
		
<?php

	
			  }
			  }
			  }
			  else{
   $sql3="SELECT userid FROM reg_users WHERE userid ='$userid3'";
  $result3=mysql_query($sql3);
  $rows3=mysql_fetch_array($result3);
  If($rows3)
  {
   $sql4="SELECT userid FROM reg_users WHERE userid ='$userid4'";
  $result4=mysql_query($sql4);
  $rows4=mysql_fetch_array($result4);
  If($userid4==0)
  {
   @$confirmpassword=$_POST['confirmpassword'];
		 If($confirmpassword==$password)
		 {
	  	  @$sql = "INSERT INTO $table_name VALUES ('$sn','$tname','$tmem1','$userid1','$mobno','$tmem2','$userid2','$tmem3','$userid3','$tmem4','$userid4')";
		  $result=mysql_query($sql);
		  if($result)
		  {
?>
<script>//alert("You have successfully registered for this event.");
window.location="1.html"</script>
		
<?php
		  }
		  }
		  else
		  {
		  ?>
<script>//alert("Database error. Please contact web team");
window.location="2.html"</script><?php
          }
  }
  else{
  If($rows4)
  {
		    @$confirmpassword=$_POST['confirmpassword'];
		 If($confirmpassword==$password)
		 {
	  	  @$sql = "INSERT INTO $table_name VALUES ('$sn','$tname','$tmem1','$userid1','$mobno','$tmem2','$userid2','$tmem3','$userid3','$tmem4','$userid4')";
		  $result=mysql_query($sql);
		  if($result)
		  {
?>
<script>//alert("You have successfully registered for this event.");
window.location="1.html"</script>
<?php
		

		  }
		  }
		  else
		  {
?> <script>//alert("Database error. Please contact web team");
window.location="2.html"</script>
<?php
          }
	  }
	  
	    else
	  {
	  die(header("location:$table_name.php?regifailed=true&reason=wronguserid4"));
	  }
	  }
	  }
	  
	    else
	  {
	  die(header("location:$table_name.php?regifailed=true&reason=wronguserid3"));
	  }
	  }
	  
	  }
	  else
	  {
	  die(header("location:$table_name.php?regifailed=true&reason=wronguserid2"));
	  }
	  
	  
	  
	  }

  ?>
