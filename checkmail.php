<html>
<head>
</head>
<body>
<?php
require ('class.phpmailer.php');
require ('class.smtp.php');

$mail = new PHPMailer();

$mail->isSMTP();                    
$mail->Host = 'hosturl';  // Specify main and backup server
//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth   = true;                            // Enable SMTP authentication
$mail->Username = 'email@email.co.in';                            // SMTP username
$mail->Password = 'password';                           // SMTP password
$mail->SMTPSecure = 'tsl';  
$mail->Port = 25;


$mail->From = 'email@email.co.in';
$mail->FromName = 'Orion 14';
$mail->addAddress('email@email.com');  // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = '<p style="color:#ffffff">This is the HTML message body in bold!</p>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent'?>
</body>
</html>