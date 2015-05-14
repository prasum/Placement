<?php

 /* $e=$_SESSION['email']; */
$i=$_POST['e'];
$n=$_POST['name'];
$r=$_POST['rollno'];
$m=$_POST['mobile'];
$f=$_POST['fblink'];
$l=$_POST['linkedin'];
$s=$_POST['skypelink'];
$mysqli=new mysqli('localhost','root','password','user_details');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$q=$mysqli->query("update store set Name= '$n',RollNo= '$r',MobileNo= '$m',FacebookLink= '$f',LinkedinLink= '$l',SkypeLink= '$s'  where Email= '$i' ");
$response='success';
echo $response;
?>
