<?php
$con=mysqli_connect("localhost","root","","linus") or die(mysql_error());


$n="joe";
$q=mysqli_query($con,"select duration_to from loan where borrower = '$n' ");
$qf=mysqli_fetch_assoc($q);

?>

<?php

$ex_date=$qf['duration_to'];
$cur_date=date("Y/m/d");
//$cur_date=date("Y/m/d");

//converting to strtotime
$exp=strtotime($ex_date);
$cur=strtotime($cur_date);

$cal=$exp-$cur;
$diff=abs(floor($cal / (60 * 60 * 24)));


if($cur<$exp){
	//$n="date not expired";
	echo "date not expired";
	echo "<br/>";
	echo $diff." days remaining ";
	
//alert from 3 to 1 day
if($diff==3){
echo "3 days remaining ";	
}
elseif($diff==2){
echo "2 days remaining ";	
}
elseif($diff==1){
echo "1 day remaining ";	
}

}
elseif($cur>$exp){
	//$n="date expired";
	echo "date expired";
	echo "<br/>";

echo "You are oweing for ".$diff." day";	


}
else{
	echo "loan expired today";
}



?>

<?php



?>

