<?php
//require("PHPMailer_5.2.0/class.phpmailer.php");
require("PHPMailer_5.2.0/PHPMailerAutoload.php");
  $admin_email = "testnaja246@gmail.com";
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $message = $_REQUEST['message'];

$mail = new PHPMailer();

$mail->isSMTP();   // set mailer to use SMTP
$mail->CharSet = 'UTF-8';
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPSecure = "tls";
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->Port = 587;
$mail->Username = "testnaja246@gmail.com";  // SMTP username
$mail->Password = "testnaja123"; // SMTP password

/*$mail->From = "chudtima2535@gmail.com";
echo "$email anddddd $name";
$mail->FromName = $name;
*/
$mail->SetFrom($admin_email, "name of admin");
//$mail->AddReplyTo($email, $name);
$mail->AddAddress($email,$name);

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>