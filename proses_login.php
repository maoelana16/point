<?php
	session_start();
	include "koneksi.php";

	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "select *from user where email='$email' and password='$password'";
	$data = mysqli_query($koneksi,$query);
	$cek = mysqli_num_rows($data);

	if($cek > 0){
		$result = mysqli_fetch_array($data);
		$_SESSION['nis'] = $result['nis'];
		$_SESSION['nama'] = $result['nama'];
		$_SESSION['ttl'] = $result['tanggal_lahir'];
		$_SESSION['jk'] = $result['jk'];
		$_SESSION['kelas'] = $result['kelas'];
		$_SESSION['alamat'] = $result['alamat'];
		$_SESSION['email'] = $result['email'];
		$_SESSION['password'] = $result['password'];
		$_SESSION['status'] = "login";

		header("location:user/beranda.php");
	}else{
		header("location:index.html");
	}

?>