
/**
 * Created by PhpStorm.
 * User: dlf164
 * Date: 04-05-2015
 * Time: 18:19
 */
<?php
session_start();
$u=$_POST['e'];
$p=$_POST['p'];
$p=md5($p);
$mysqli=new mysqli('localhost','root','password','user_info');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$q=$mysqli->query("select * from register where Email=' $u' and  Password=' $p ' ");
$e=$q->num_rows;
if($e>0)
{
    $loggedIn=true;
    $response='success';
    $_SESSION['logged_in']=true;
    $_SESSION['email']=$u;

}
else
{
    $loggedIn=false;
    $response='fail';
}

echo $response;



?>







?>