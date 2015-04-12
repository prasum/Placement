	<?php

	require 'PHPMailer/PHPMailerAutoload.php';
	$q=$_GET['q'];
	echo $q;
	$mail = new PHPMailer;
	$mail->isSMTP();
	 $mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;                             // Enable SMTP authentication
	    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission 465 ssl
	    $mail->Port = 587;

	    //Set the encryption system to use - ssl (deprecated) or tls
	    $mail->SMTPSecure = 'tls';
	    $mail->Username='tendoesch@gmail.com';
	    $mail->Password='yomahesh9094';
	$mail->From = 'tendoesch@gmail.com';
	$mail->FromName = 'Ten Doeschate';
	$mail->addAddress($q, 'Sumeet Lalla');
	$mail->addReplyTo('tendoesch@gmail.com', 'Ten Doeschate');
	$mail->WordWrap = 50;
	$mail->isHTML(true);
	$mail->Subject = 'Cric';
	$mail->Body    = 'Hi';
	$mail->SMTPDebug = 1;
	
	if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
	echo "registered mail to".$q."sent";









?>