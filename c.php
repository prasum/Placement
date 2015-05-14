<?php

$i=$_POST['e'];
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
$q=$mysqli->query("update store set 10percentage= '$n',12percentage= '$r',cgpa= '$m',sgpa1= '$f',sgpa2= '$l', sgpa3= '$s', sgpa4= '$t', sgpa5= '$u' where  Email= '$i' ");
$response='success';
echo $response;
?>