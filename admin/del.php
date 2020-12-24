<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['mg']))
{
$sql=mysqli_query($con,"truncate manager");
$_SESSION['msg']="All Manager Record has been Emptied successfully !!!";
}
else if(isset($_POST['sf']))
{
$sql=mysqli_query($con,"truncate staff");
$_SESSION['msg']="All Staff Record has been Emptied successfully!!";
}
else if(isset($_POST['sw']))
{
$sql=mysqli_query($con,"truncate sport_win");
$_SESSION['msg']="All Sport Win Record has been Emptied successfully!!";
}
else if(isset($_POST['pt']))
{
$sql=mysqli_query($con,"payout");
$_SESSION['msg']="All PayOuts Record has been Emptied successfully!!";
}
else if(isset($_POST['bp']))
{
$sql=mysqli_query($con,"truncate backup");
$_SESSION['msg']="All Backup Record has been Emptied successfully!!";
}
else if(isset($_POST['ou']))
{
$sql=mysqli_query($con,"truncate online_user");
$_SESSION['msg']="All Online Users Record has been Emptied successfully!!";
}
else if(isset($_POST['mc']))
{
$sql=mysqli_query($con,"truncate money_collected");
$_SESSION['msg']="All Money Collected Record has been Emptied successfully!!";
}
else if(isset($_POST['wd']))
{
$sql=mysqli_query($con,"truncate work_data");
$_SESSION['msg']="All Work Data Record has been Emptied successfully!!";
}
else if(isset($_POST['sl']))
{
$sql=mysqli_query($con,"truncate staff_log");
$_SESSION['msg']="All Staff Login Session Record has been Emptied successfully!!";
}
else if(isset($_POST['ml']))
{
$sql=mysqli_query($con,"truncate manager_log");
$_SESSION['msg']="All Manager Login Session Record has been Emptied successfully!!";
}
else if(isset($_POST['fin']))
{
$sql=mysqli_query($con,"truncate finance");
$_SESSION['msg']="All Finance Record has been Emptied successfully!!";
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Delete All</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Delete All</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Delete All</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-6 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Deletion Zone</h5>
												</div>
												<div class="panel-body">
								<p style="color:green;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
													<form role="form" name="dcotorspcl" method="post" >
													
													<button type="submit" name="mg" class="btn btn-o btn-primary">
															Empty Manager
														</button>	
												<button type="submit" name="sf" class="btn btn-o btn-primary">
															Empty Staff
														</button>
														<button type="submit" name="sw" class="btn btn-o btn-primary">
															Empty Sport Win
														</button><br/><br/>
														<button type="submit" name="pt" class="btn btn-o btn-primary">
															Empty PayOuts
														</button>
														<button type="submit" name="bp" class="btn btn-o btn-primary">
															Empty Backup
														</button>
														
														
														<button type="submit" name="ou" class="btn btn-o btn-primary">
															Empty Online Users
														</button><br/><br/>

														<button type="submit" name="mc" class="btn btn-o btn-primary">
															Empty Money Collected History
														</button>
														<button type="submit" name="wd" class="btn btn-o btn-primary">
															Empty Work Data
														</button><br/><br/>
														<button type="submit" name="sl" class="btn btn-o btn-primary">
															Empty staff Session Logs
														</button>
														<button type="submit" name="ml" class="btn btn-o btn-primary">
															Empty Manager Session Logs
														</button><br/><br/>
														<button type="submit" name="fin" class="btn btn-o btn-primary">
															Empty Finance
														</button>

													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>

									
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
