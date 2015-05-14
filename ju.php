<?php
require 'PHPMailer/PHPMailerAutoload.php';
?>

<?php
$s=$_POST['q'];
$f=$_POST['s'];
$mysqli=new mysqli('localhost','root','password','user_details');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$q=$mysqli->query("select Email from register_info where FirstName= '$s' ");
$row=$q->fetch_row(MYSQLI_ASSOC);
$a=$row['Email'];
$base_url='http://localhost/placement/resume/index.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;                             // Enable SMTP authentication
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission 465 ssl
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
$mail->Username='tendoesch@gmail.com';
$mail->Password='yomahesh@9094';
$mail->From = 'tendoesch@gmail.com';
$mail->FromName = 'Ten Doeschate';
$mail->addAddress($a, 'Sumeet Lalla');
$mail->addReplyTo('tendoesch@gmail.com', 'Ten Doeschate');
$mail->WordWrap = 50;
$mail->isHTML(true);
$mail->Subject = 'Student CV';

$mail->Body    = 'Hi, <br/> <br/> We are sending you the resume of our student. Please verify  and get interactive with the student<br/> <br/>. The student resume  link is <a  href="'.$base_url.'?q='.$f.'">'.$base_url.'?q='.$f.'</a>' ;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
}

$response= 'success';
echo $response;











?>