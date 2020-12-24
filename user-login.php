<?php
session_start();
error_reporting(0);

include_once("db/check.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Saynator Loan Cooperatives |  Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="admin/vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="admin/vendor/themify-icons/themify-icons.min.css">
		<link href="admin/vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="admin/vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="admin/vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="admin/assets/css/styles.css">
		<link rel="stylesheet" href="admin/assets/css/plugins.css">
				<link rel="stylesheet" href="admin/assets/css/themes/theme-1.css" id="skin_color" />

				<script type="text/javascript">
function valid()
{
if(document.chngpwd.username.value=="")
{
alert("Cashier Id Field is Empty !!");
document.chngpwd.username.focus();
return false;
}
else if(document.chngpwd.password.value=="")
{
alert("Password Field is Empty !!");
document.chngpwd.password.focus();
return false;
}

return true;
}
</script>

	</head>
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<h2><a href="index.html"><img src="images/logo2.png" alt="" /></a>  | Login</h2></a>
				</div>

				<div class="box-login">
					<form class="form-login" method="post" name="chngpwd"  onSubmit="return valid();">
						<fieldset>
							<legend>
								Sign in to your account
							</legend>
						
							<p>
								Please enter your username and password to log in.<br />
								<?php 

								if(!empty($_SESSION['errmsg'])){
								echo "<span style='color:red;'>".htmlentities($_SESSION['errmsg'])."</span>";
								$_SESSION['errmsg']="";
								}
								else if(!empty($_SESSION['errmsg2'])){
								echo "<span style='color:green;'>".htmlentities($_SESSION['errmsg2'])."</span>";
								$_SESSION['errmsg2']="";
								}
								
								?>
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Enter Username" required>
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<!--<input type="password" class="form-control password" name="password" placeholder="Enter Password" required> -->
									<input type="password" class="form-control password" name="password" placeholder="Enter Password" required>
									<i class="fa fa-lock"></i>
									 </span>
							</div>
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>

								<span class="btn btn-primary pull-left" >
									<a href="index.html" style="color: #fff;">Back to Home</a>  <i class="fa fa-home"></i>
								</span>
							</div>
							
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> Saynator Loan Cooperatives</span>. <span>All rights reserved</span>
					</div>
			
				</div>

			</div>
		</div>
		<script src="admin/vendor/jquery.min.js"></script>
		<script src="admin/vendor/bootstrap.min.js"></script>
		<script src="admin/vendor/modernizr/modernizr.js"></script>
		<script src="admin/vendor/jquery.cookie.js"></script>
		<script src="admin/vendor/perfect-scrollbar.min.js"></script>
		<script src="admin/vendor/switchery.min.js"></script>
		<script src="admin/vendor/jquery.validate.min.js"></script>
	
		<script src="admin/vendor/js/main.js"></script>

		<script src="admin/vendor/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	
	</body>
	<!-- end: BODY -->
</html>