<?php
session_start();
include('include/config.php');
$_SESSION['login']=="";
session_unset();
session_destroy();
$_SESSION['errmsg2']="You have successfully logged out";
?>
<script language="javascript">
document.location="../user-login.php";
</script>
