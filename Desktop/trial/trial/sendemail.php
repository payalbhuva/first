


<?php
$Email=$_POST['Email'];
$confirm_code=md5(uniqid(rand(100000,999999)));

$trim_code= mb_strimwidth($confirm_code,0,5,"");


// send e-mail to ...
$to=$Email;

// Your subject
$subject="Your confirmation link here";

// From
$header="from: your name <your email>";

// Your message
$message="Your Verification Code \r\n";
$message.="$trim_code";

$message.="\n\n Use verification code while login \r\n";

// send email
$sentmail = mail($to,$subject,$message,$header);


?>