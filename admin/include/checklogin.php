<?php
function check_login()
{
if(strlen($_SESSION['login'])<1)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="../user-login.php";		
		$_SESSION['login']="";
		$_SESSION['errmsg']="You must login before accessing the system";
		header("Location: http://$host$uri/$extra");
	}
}
?>