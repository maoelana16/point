<?php
	session_start();
	include "../koneksi.php";
	
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$jk = $_POST['jk'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "insert into user values('$nis','$nama','$ttl','$jk','$kelas','$alamat','$email','$password')";
	$data = mysqli_query($koneksi,$query);
	header("location:data_user.php");
?>