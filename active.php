<?php
$w=$_GET['q'];

if(!empty($w) && isset($w))
{
	$mysqli=new mysqli('localhost','root','password','user_details');
	if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
            
        	$n=$mysqli->query("update register_info set status=1 where Activation = '$w'  ");

        	$j=true;
        	header('location: index.html');
}





?>

