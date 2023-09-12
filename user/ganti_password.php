<?php	
	session_start();
	include "../koneksi.php";
	
	if($_SESSION['status']== ""){
        header("location:../index.html");
    }

    $nis = $_POST['nis'];
    //$nama = $_POST['nama'];
    $newpassword = $_POST['newpassword'];

    $query = "update user set password='$newpassword' where nis='$nis'";
    $data = mysqli_query($koneksi,$query);
    header("location:beranda.php");

?>