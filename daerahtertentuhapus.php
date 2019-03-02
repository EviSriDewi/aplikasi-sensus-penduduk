<?php
include "../../config/koneksi.php";
$id=$_GET['id'];
$hapus=mysql_query("DELETE FROM regions WHERE id ='$id'");
if ($hapus)
echo "<meta http-equiv='refresh' content='0; url=index.php?page=datadaerahtampil'>";
else
	echo "Gagal";
?>
