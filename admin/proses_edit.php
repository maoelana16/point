<?php
	session_start();
	include "../koneksi.php";
	
	if($_SESSION['status']== ""){
        header("location:../index.html");
    }

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $jk	= $_POST['jk'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "update user set nis='$nis',nama='$nama',tanggal_lahir='$ttl',jk='$jk',kelas='$kelas',alamat='$alamat',email='$email',password='$password' where nis='$nis'";
    $data = mysqli_query($koneksi,$query);
    header("location:data_user.php");

?>