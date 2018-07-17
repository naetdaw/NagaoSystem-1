<?php
//require("PHPMailer_5.2.0/class.phpmailer.php");
session_start(); //เปิด session
require("PHPMailer_5.2.0/PHPMailerAutoload.php");
  $admin_email = "nagaosystem.test@gmail.com";
  $company = $_SESSION['company'];
  $name = $_SESSION['name'];
  $email = $_SESSION['Email'];//email: nagaosystem.test@gmail.com pass:nagaotest
  $phone = $_SESSION['phone'];
  $message = $_SESSION['message'];
  $message2 = "Name: $name<br>Phone : $phone <br> Content : $message";

$mail = new PHPMailer();

$mail->isSMTP();   // set mailer to use SMTP
$mail->CharSet = 'UTF-8';
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPSecure = "tls";
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->Port = 587;
$mail->Username = "nagaosystem.test@gmail.com";  // SMTP username
$mail->Password = "nagaotest"; // SMTP password

$mail->SetFrom($admin_email, "name of admin");
//$mail->AddReplyTo($email, $name);
$mail->AddAddress($email,$name);

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Contact from website";
$mail->Body    = $message2;
$mail->AltBody = $message2;

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   echo "<br><a href='contact.php'>back</a></p>";
   exit;
}
else{
echo "Message has been sent";
echo "<br><a href='contact.php'>back</a></p>";
}
?>