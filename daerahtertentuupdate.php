<?php
include "../../config/koneksi.php";

$id_pengumuman =$_POST['id_pengumuman'];
$no_pendaftaran = $_POST['no_pendaftaran'];
$nama_siswa = $_POST['nama_siswa'];
$keterangan = $_POST['keterangan'];

$succes = mysql_query("UPDATE pengumuman SET 
no_pendaftaran='$no_pendaftaran',
nama_siswa='$nama_siswa',
keterangan='$keterangan' WHERE id_pengumuman ='$id_pengumuman'")or die(mysql_error());

if($succes){
		echo "<script>alert('Data Berhasil Diupdate');
				location='../../index.php?page=pengumumantampil';
				</script>";
}else{
	echo "<script>alert('Data Gagal Diupdate');
				location='../../index.php?page=pengumumantampil';
				</script>";
}
?>

