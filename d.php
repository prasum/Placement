<?php
$i=$_POST['e'];
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
$q=$mysqli->query("update store set branch= '$n', skill1= '$r', skill2= '$m', skill3= '$f', tier= '$l', type= '$s' where Email= '$i' ");
$response='success';
echo $response;
?>