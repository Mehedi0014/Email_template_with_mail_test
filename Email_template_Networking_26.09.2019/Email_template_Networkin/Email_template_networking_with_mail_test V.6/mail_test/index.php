<?php 
require 'mailer/PHPMailerAutoload.php';

include "index_inline.php";

echo notification_mail("Mail test", $body, "stonemind0014@gmail.com");


function notification_mail($subject = "", $body = "", $email_to = ""){


//================= for access emil Important =======================
//https://accounts.google.com/b/0/DisplayUnlockCaptcha
//=================================================


$mail = new PHPMailer;

$mail->SMTPDebug = 3;    // Enable verbose debug output

$mail->isSMTP();  // Set mailer to use SMTP
$mail->Host = 'smtp.1und1.de';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'info@cls-smartphone.de';   // SMTP username
$mail->Password = 'Anikasadia1!';  // SMTP password
$mail->SMTPSecure = 'TSL';   // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;//587/465;    // TCP port to connect to
$mail->CharSet = 'UTF-8'; // imporant for german character
//$mail->SMTPDebug = 1; // on for debuging
$mail->setFrom('info@cls-smartphone.de', 'CLS-Computer');
$mail->addAddress($email_to, '');     // Add a recipient
//$mail->addAddress('dyin.razeeb@gmail.com', '');     // Add a another recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('dyin.razeeb@gmail.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

// if ($attachment != "") { 
// 	$mail->addAttachment(__DIR__.'/../../assets/'.$attachment); // Add attachments
// }
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $body;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
    echo 'Message could not be sent.';
     echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo 'Message has been sent';
    
}

}


?>