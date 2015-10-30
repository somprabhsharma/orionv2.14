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

$query="Select userid from users order by userid desc";
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
		  @$confirm_code=md5(uniqid(rand())); 
		  @$password=$_POST['password'];
		    @$confirmpassword=$_POST['confirmpassword'];
		 If($confirmpassword==$password)
		 {
	  	  @$sql = "INSERT INTO users VALUES ('$userid','$fullname','$emailid','$mobno','$collname','$collid','$branch','$semester','$password','$confirm_code')";
		  $result=mysql_query($sql);
		  if($result)
		  {

require ('class.phpmailer.php');
require ('class.smtp.php');

$mail = new PHPMailer();

$mail->isSMTP();                    
$mail->Host = 'hosturl';  // Specify main and backup server
 // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth   = true;                            // Enable SMTP authentication
$mail->Username = 'email@email.com';                            // SMTP username
$mail->Password = 'password';                           // SMTP password
$mail->SMTPSecure = 'ssl';  
$mail->Port = 465;


$mail->From = 'email@email.com';
$mail->FromName = 'Orion 14 Support';
$mail->addAddress($emailid);  // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Your confirmation link here';
$mail->Body    = 'Dear '.$fullname.', <br><br>

Your Registration No. = ORION14_'.$userid.'<br>
Your userid = '.$emailid.'<br>
your password = '.$password.'<br>
 Click on this link to activate your account http://orion14.co.in/_include/php/confirmation.php?passkey='.$confirm_code.' ';
$mail->AltBody = '';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

?>



			<br><br><br><br><br><br><br><br><br><br>
			<center><span id="a">Thank You, Your Details Has Been Submitted.<br><br>
				<span>
			<br><br>
			<span style="font-style:bold;font-color:red;">A confirmation mail has been sent to your email address. <br>Please Activate Your Account Before Login.<span>
			<br><span><a href="../../login.php">Click here</a> to go to Log in Page. <span>
			
			<p style="font-color:red;font-family=comic sans ms;font-size:16px"> Note: Please check your inbox as well as spam folder also.</p>
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
			  <script>alert('You have already registered with this email ID. Please Check your email.');
			  window.location='../../login.php'</script>
		 <?php
          }
	  }
  ?>
</body>
</html>
