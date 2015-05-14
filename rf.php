<?php
/**
 * Created by PhpStorm.
 * User: dlf164
 * Date: 04-05-2015
 * Time: 17:56
 */
$e=$_POST['e'];
$n=$_POST['u'];
$p=$_POST['p'];
$p=md5($p);
$mysqli=new mysqli('localhost','root','password','user_info');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$q=$mysqli->query("insert into register(Email,Name,Password) values('$e','$n','$p')");
$response='success';
echo $response;
?>
