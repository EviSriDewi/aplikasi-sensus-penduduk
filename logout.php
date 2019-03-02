<?php
session_start();
include '../conf/connect.php';
$sess_users 	= $_SESSION['email'];
if (isset($sess_users))
{
	mysql_query("update users set created_at = '0' where email = '$sess_users'") or die (mysql_error());
	session_destroy();
		echo '<script>alert("Anda Telah Logout !!!");
				window.location.href="../index.php"</script>';
}
?>