<?php

$n=$_POST['branch'];
$r=$_POST['skill1'];
$m=$_POST['skill2'];
$f=$_POST['skill3'];
$l=$_POST['tier'];
$s=$_POST['type'];

$mysqli=new mysqli('localhost','root','password','user_details');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$q=$mysqli->query("insert into store(branch,skill1,skill2,skill3,tier,type) values('$n','$r','$m','$f','$l','$s')");
$response='success';
echo $response;
?>