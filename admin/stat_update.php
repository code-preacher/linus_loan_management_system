
<?php 
$id=$_GET['id'];
include('include/config.php');
$ret=mysqli_query($con,"SELECT loan_stat FROM loan where id='$id'");
$row=mysqli_fetch_assoc($ret);
$ss=$row['loan_stat'];

 if($ss==0){
mysqli_query($con,"UPDATE loan SET loan_stat=1 WHERE id='$id'");
 }            
 else if($ss==1){
mysqli_query($con,"UPDATE loan SET loan_stat=0 WHERE id='$id'");
 } 
 else if($ss==''){
mysqli_query($con,"UPDATE loan SET loan_stat=0 WHERE id='$id'");
 } 
 header("location:view_loan.php");

?>