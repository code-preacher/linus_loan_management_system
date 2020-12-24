<?php
session_start();
//error_reporting(0);
$id=$_GET['id'];
include('include/config.php');
include('include/checklogin.php');
check_login();
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin  | Loan Detail</title>
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
if(document.chngpwd.cname.value=="")
{
alert("Client Name Field is Empty !!");
document.chngpwd.cname.focus();
return false;
}else if(document.chngpwd.bname.value=="")
{
alert("Borrower Name Field is Empty !!");
document.chngpwd.bname.focus();
return false;
}
else if(document.chngpwd.amount.value=="")
{
alert("Amount Field is Empty !!");
document.chngpwd.amount.focus();
return false;
}

else if(document.chngpwd.profit.value=="")
{
alert("Profit Field is Empty !!");
document.chngpwd.shop.focus();
return false;
}else if(document.chngpwd.duration.value=="")
{
alert("Duration Field is Empty !!");
document.chngpwd.duration.focus();
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
									<h1 class="mainTitle">Admin | Loan Detail</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Loan Detail</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-10">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												
                                                 <div class="panel-heading ">
													<h5 class="panel-title" style="float: right;">
													Loan Status:
													<?php
													$sl=mysqli_query($con,"select loan_stat from loan where id='$id'");
                                                    $dat=mysqli_fetch_array($sl);
                                                    $st=$dat['loan_stat'];
                                                    if($st==0){
													echo "<span style='color:red;'>Oweing</span>";
												}
												elseif($st==1){
													echo "<span style='color:green;'>Not Oweing</span>";
												}
												else{
													echo "span style='color:red;'>Invalid</span>";
												}
													?>
												</h5>
												</div>

												<div class="panel-body">
							


								<?php 
$sql=mysqli_query($con,"select * from loan where id='$id'");
$data=mysqli_fetch_array($sql);
?>
	

	
													<form role="form" name="chngpwd" method="post" onSubmit="return valid();">
												<div class="form-group">
															<label for="exampleInputPassword1">
																Client Name
															</label>
					<input type="text" name="cname" readonly="readonly" class="form-control"  placeholder="Enter Client Name" value="<?php echo htmlentities($data['client_name']);?>">
														</div>


														<div class="form-group">
															<label for="exampleInputPassword1">
																Borrower Name
															</label>
					<input type="text" name="bname" readonly="readonly" class="form-control"   value="<?php echo htmlentities($data['borrower']);?>">
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
															Amount Borrowed: 	</label>
					<input type="text" name="amount" readonly="readonly" class="form-control"   value="<?php echo htmlentities($data['amount']);?>">
														</div>


														<div class="form-group">
															<label for="exampleInputPassword1">
															Profit : 	</label>
					<input type="text" name="profit"  class="form-control" readonly="readonly"  value="<?php echo htmlentities($data['profit']);?>">
														</div>



														<div class="form-group">
															<label for="exampleInputPassword1">
															Total
															</label>
			<input type="text" name="poz" class="form-control" readonly="readonly" value="<?php echo "₦".htmlentities($data['total']);?>">
														</div>

<div class="form-group">
															<label for="exampleInputPassword1">
															Duration From :
															</label>
					<input type="text" name="durationf" readonly="readonly" class="form-control"  value="<?php echo htmlentities($data['duration_from']);?>" >
														</div>
				
				<div class="form-group">
															<label for="exampleInputPassword1">
														Duration To :
															</label>
					<input type="text" name="durationt" readonly="readonly" class="form-control"  value="<?php echo htmlentities($data['duration_to']);?>" >
														</div>
				
													
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
