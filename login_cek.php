<td><?php
session_start();

include '../conf/connect.php';

$email	= $_POST['email'];
$password		= $_POST['password'];

$result = mysql_query("select count(*) as hasil from users where email='$email' and password='$password'") or die (mysql_error());
$row = mysql_fetch_array($result);

if ($row[0]=="1")
{
	$query_status = mysql_query("select * from users where email='$email'")or die (mysql_error());
	$row_status=mysql_fetch_array($query_status);

	
	$_SESSION['email'] = $email;

	mysql_query("update users set created_at='1' where email='$email'") or die (mysql_error());
	
	echo '<script>alert("Selamat Anda Berhasil Login !!!");
				window.location.href="../index.php?page=index"</script>';
}
else
{
	session_destroy();
	echo '<script>alert("Email atau Password Yang Anda Masukkan Salah !!!");
				window.location.href="../index.php?page=login"</script>';

}
?> </td>
