<?php include 'users_connectivity.php';//select the table 

?>
<?php

@$us=$_POST['emailid'];
@$pw=$_POST['password'];
	  @$query="select emailid and password from reg_users where  password ='$pw' and emailid ='$us'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
	if($data)
	{
	?>
	<?php
		session_start();
		$_SESSION[emailid]=$us;
	?>
		<script> window.location='../../eventreg.php'</script>
<?php
	}
	else
	{
	die(header("location:../../login.php?loginFailed=true&reason=password"));
	}
?>
