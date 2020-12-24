<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

$_SESSION['msg1']=" ";
$_SESSION['msg2']=" ";
$_SESSION['msg3']=" ";
$ip='';
$st=0;
$lt='';
$lo='';
extract($_POST);

if(isset($_POST['submit'])){
	$date=date("d/m/y \@ g:i A");

$q=$con->prepare("insert into client(name,sex,address,occupation,email,number,date) values(? , ? , ? , ? , ? , ? , ?)");
$q->bind_param('sssssss',$name,$sex,$address,$occupation,$email,$number,$date);
$q->execute();


if($q){
$_SESSION['msg2']="Client Added Successfully !!!";
}
else
{
$_SESSION['msg1']="Client failed inserting !!!";
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin  | Add Client</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, Staff-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
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
<script type="text/javascript">
function valid()
{
if(document.chngpwd.name.value=="")
{
alert("Name Field is Empty !!");
document.chngpwd.name.focus();
return false;
}

else if(document.chngpwd.address.value=="")
{
alert("Address Field is Empty !!");
document.chngpwd.address.focus();
return false;
}

else if(document.chngpwd.occupation.value=="")
{
alert("Occupation Field is Empty !!");
document.chngpwd.occupation.focus();
return false;
}else if(document.chngpwd.email.value=="")
{
alert("Email Field is Empty !!");
document.chngpwd.email.focus();
return false;
}
else if(document.chngpwd.number.value=="")
{
alert("Number Field is Empty !!");
document.chngpwd.number.focus();
return false;
}
return true;
}
</script>

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
									<h1 class="mainTitle">Admin | Add Client</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Add Client</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-5">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Add Client</h5>
												</div>
												<div class="panel-body">
							
								<?php
								if(!empty($_SESSION['msg1'])){
								echo "<p style='color:red;'>".htmlentities($_SESSION['msg1'])."</p>";	
								}
								if(!empty($_SESSION['msg2'])){
								echo "<p style='color:green;'>".htmlentities($_SESSION['msg2'])."</p>";		
								}
								else{

								echo htmlentities($_SESSION['msg3']);	
								}
								
								?>	
													<form role="form" name="chngpwd" method="post" onSubmit="return valid();">
												<div class="form-group">
															<label for="exampleInputPassword1">
																Client Name
															</label>
					<input type="text" name="name" class="form-control"  placeholder="Enter Client Name">
														</div>

														<div class="form-group">
														
															<label for="exampleInputPassword1">
																Sex
															</label>					
							<select name="sex" class="form-control">
								<option value="male">MALE</option>
								<option value="female">FEMALE</option>
							</select>
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
															Address
															</label>
					<input type="text" name="address" class="form-control"  placeholder="Enter Address">
														</div>
														
	<div class="form-group">
															<label for="exampleInputPassword1">
																Occupation
															</label>
					<input type="text" name="occupation" class="form-control"  placeholder="Enter Occupation">
														</div>

															<div class="form-group">
															<label for="exampleInputPassword1">
																Email
															</label>
					<input type="email" name="email" class="form-control email"  placeholder="Enter Email">
														</div>
															<div class="form-group">
															<label for="exampleInputPassword1">
																Phone Number
															</label>
					<input type="text" name="number" class="form-control"  placeholder="Enter Phone Number">
														</div>




	
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Add Client
														</button>
													</form>
												</div>
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
		<script src="vendor/jquery.min.js"></script>
		<script src="vendor/bootstrap.min.js"></script>
		<script src="vendor/modernizr.js"></script>
		<script src="vendor/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/jquery.maskedinput.min.js"></script>
		<script src="vendor/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize.min.js"></script>
		<script src="vendor/classie.js"></script>
		<script src="vendor/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="vendor/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="vendor/form-elements.js"></script>
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
