<?php
  session_start();

    include('include/config.php');
    include('include/checklogin.php');
check_login();

if(isset($_GET['client_del'])){

  $id=$_GET['client_del'];
  $fl=mysqli_query($con,"select id from client where id='$id'");
$lf=mysqli_fetch_assoc($fl);
$us=$lf['id'];

  if($fl){
mysqli_query($con,"delete from client where id='$us' ");
 $_SESSION['msg']="Client have been deleted Successfully!!";

}
header("location:view_client.php");
}

else if(isset($_GET['loan_del'])){

  $id=$_GET['loan_del'];
  $fl=mysqli_query($con,"select id from loan where id='$id'");
$lf=mysqli_fetch_assoc($fl);
$us=$lf['id'];

  if($fl){
mysqli_query($con,"delete from loan where id='$us' ");
 $_SESSION['msg']="Loan Detail have been deleted Successfully!!";

}
header("location:view_loan.php");
}

?>