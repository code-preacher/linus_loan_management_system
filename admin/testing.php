<?php
session_start();
//error_reporting(0);
include('include/config.php');

$_SESSION['msg']=" ";
$t=microtime(true);
$q=$con->query("select id,name from client order by id desc");
foreach ($q as $result) {
	print_r('\n'.$result['name']);
}
$tt=microtime(true);
$f=($t-$tt)/60;
print_r($f);



print_r('<br>');

$y=microtime(true);
$p=$con->prepare("select id,name from client order by id desc");
$p->execute();
$p->store_result();
$p->bind_result($a,$b);
while ($p->fetch()) { 
	print_r('\n'.$b);
}
$yy=microtime(true);
$yf=($y-$yy)/60;
print_r($yf);
?>
