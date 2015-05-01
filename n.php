<?php
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
$q=$mysqli->query("insert into store(Name,RollNo,MobileNo,FacebookLink,LinkedinLink,SkypeLink) values('$n','$r','$m','$f','$l','$s')");
$response='success';
echo $response;
?>
