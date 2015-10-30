<?php include 'users_connectivity.php';//select the table 
 @$emailid=$_POST['emailid'];
  @$query="select * FROM users where emailid ='$emailid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
	 @$confirm_code=$data['confim_code'];
	 @$fullname=$data['fullname'];
	 @$userid=$data['userid'];
	 @$password=$data['password'];
	if($data)
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
else
{
die(header("location:../../login.php?sendingDone=true&reason=correctemail"));
}

	}
	else
	{
	die(header("location:../../login.php?sendingFailed=true&reason=wrongemail"));
	}
?>
