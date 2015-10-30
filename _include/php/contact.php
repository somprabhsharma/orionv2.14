<?php require ('class.phpmailer.php');
require ('class.smtp.php');

@$name=$_POST['name'];
		  @$email=$_POST['email'];
		  @$message=$_POST['message'];
$mail = new PHPMailer();

$mail->isSMTP();                    
$mail->Host = 'email';  // Specify main and backup server
 // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth   = true;                            // Enable SMTP authentication
$mail->Username = 'email@email.com';                            // SMTP username
$mail->Password = 'password';                           // SMTP password
$mail->SMTPSecure = 'ssl';  
$mail->Port = 465;


$mail->From = ''.$email.'';
$mail->FromName = ''.$name.'';
$mail->addAddress('email@email.com');  // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Contact Query';
$mail->Body    = 'From : '.$email.' <br>
Name: '.$name.'<br>
Message: '.$message.'';
$mail->AltBody = '';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

else
	{
	die(header("location:../../contactus.php?entry=true&reason=submitted"));
	}

?>