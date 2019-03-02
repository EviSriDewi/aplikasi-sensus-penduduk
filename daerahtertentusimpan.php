<?php
include "../../config/koneksi.php";

$id =$_POST['id'];
$nama_daerah = $_POST['name'];
$jumlah_penduduk = $_POST[''];
$total_pendapatan = $_POST[''];
$rata_rata_pendapatan = $_POST[''];
$status = $_POST[''];

$succes =mysql_query("INSERT INTO region (id,name,julah_penduduk,total_penduduk,rata_rata_pendpatan,status) VALUES ('$id','$name','$jumlah_penduduk','$total_penduduk','$rata_rata_pendapatan','$status')");


if($succes)
{
	echo "<script>alert('Data Berhasil Diinput');
				location='../../index.php?page=datadaerahtampil';
				</script>";
}else{
	echo "<script>alert('Data Gagal Diinput');
				location='../../index.php?page=datadaerahtampil';
				</script>";
}
?>

