<?php
	session_start();
	include "../koneksi.php";

	$id_poin = $_GET['id_poin'];
	mysqli_query($koneksi,"delete from poin where id_poin='$id_poin'");
	$_SESSION["sukses"] = 'Data Berhasil Dihapus';
	header("location:data_user.php");
	$_SESSION["sukses"] = 'Data Berhasil Dihapus';

?>