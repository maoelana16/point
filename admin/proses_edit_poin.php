<?php	
	session_start();
	include "../koneksi.php";
	
	if($_SESSION['status']== ""){
        header("location:../index.html");
    }

    $id_poin = $_POST['id_poin'];
    $nis = $_POST['nis'];
    //$nama = $_POST['nama'];
    $poin = $_POST['poin'];

    $query = "update poin set id_poin='$id_poin',nis='$nis',jml_poin='$poin' where id_poin='$id_poin'";
    $data = mysqli_query($koneksi,$query);
    header("location:data_poin.php");

?>