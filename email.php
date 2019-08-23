<?php
//How to send email from GMAIL account!
require("inc/phpmailer/PHPMailerAutoload.php"); //or select the proper destination for this file if your page is in some   //other folder
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465"); //No further need to edit your configuration files.
$mail = new PHPMailer();
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com"; // SMTP server
$mail->SMTPSecure = "ssl";
$mail->Username = "your account@gmail.com"; //my account name
$mail->Password = "your pass"; //this account's password.
$mail->Port = "465";
$mail->isSMTP();  // telling the class to use SMTP
$rec1="recepient@gmail.com"; //receiver. email addresses to which u want to send the mail.
$mail->AddAddress($rec1);


if (!$mail -> ValidateAddress($email)) {
    echo "Invalid email address";
    exit;
}

?>