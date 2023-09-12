<?php
	session_start();
	include "../koneksi.php";

	$nis = $_GET['nis'];
	mysqli_query($koneksi,"delete from user where nis='$nis'");
	$_SESSION["sukses"] = 'Data Berhasil Dihapus';
	header("location:data_user.php");
	$_SESSION["sukses"] = 'Data Berhasil Dihapus';

?>