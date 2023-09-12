<?php
	session_start();
	include	"../koneksi.php";

	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "select *from admin where email='$email' and password='$password'";
	$data = mysqli_query($koneksi,$query);
	$cek = mysqli_num_rows($data);

	if($cek > 0){
		$result	= mysqli_fetch_array($data);
		$_SESSION['nama_admin'] = $result['nama_admin'];
		$_SESSION['status'] = "login";

		header("location:beranda.php");
	}else{
		header("location:index.html");
	}

?>