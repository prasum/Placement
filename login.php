<?php
session_start();
$u=$_POST['u'];
$p=$_POST['p'];
$r=$_POST['r'];
$p=md5($p);
$mysqli=new mysqli('localhost','root','password','user_details');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$q=$mysqli->query("select * from register_info where Email='{$u}' and  Password='{$p}' and Role='{$r}'");
$e=$q->num_rows;
if($e>0)
{
    $loggedIn=true;
    $response='success';
    $_SESSION['logged_in']=true;

}
else
{
    $loggedIn=false;
    $response='fail';
}

echo $response;



?>