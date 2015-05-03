<?php

$n=$_POST['10percentage'];
$r=$_POST['12percentage'];
$m=$_POST['cgpa'];
$f=$_POST['sgpa1'];
$l=$_POST['sgpa2'];
$s=$_POST['sgpa3'];
$t=$_POST['sgpa4'];
$u=$_POST['sgpa5'];

$mysqli=new mysqli('localhost','root','password','user_details');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$q=$mysqli->query("insert into store(10percentage,12percentage,cgpa,sgpa1,sgpa2,sgpa3,sgpa4,sgpa5) values('$n','$r','$m','$f','$l','$s','$t','$u')");
$response='success';
echo $response;
?>