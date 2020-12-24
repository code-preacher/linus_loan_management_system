<?php
session_start();
error_reporting(0);
include("config.php");
if(isset($_POST['submit']))
{
$uname=Cleanse(mysqli_real_escape_string($con,$_POST['username']));
$pass=Cleanse(mysqli_real_escape_string($con,$_POST['password']));

#admin
$ret3=mysqli_query($con,"SELECT * FROM admin WHERE username='$uname' and password='$pass'");
$num3=mysqli_fetch_array($ret3);


if($num3>0)
{
$extra="admin/dashboard.php";//
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num3['username'];
$_SESSION['name']=$num3['name'];
header("location:http://$host$uri/$extra");
exit();
}
else{

	$_SESSION['errmsg']="Invalid credentials, please check inputs and try again";
	header("location:user-login.php");
}

}


function Cleanse($Data)
{
$Data = preg_replace('/[^A-Za-z0-9_-]/', '', $Data); /** Allow Letters/Numbers and _ and - Only */
$Data = htmlentities($Data, ENT_QUOTES, 'UTF-8'); /** Add Html Protection */
$Data = stripslashes($Data); /** Add Strip Slashes Protection */
$Data = strip_tags($Data);
$Data = str_replace(' ','',$Data);

return $Data;
}
?>

