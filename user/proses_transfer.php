<?php   
    session_start();
    include "../koneksi.php";
    
    if($_SESSION['status']== ""){
        header("location:../index.html");
    }

    $id_poin = $_POST['id_poin'];
    $nis_user = $_POST['nis_user'];
    $nis = $_POST['nis'];
    $transfer_poin = $_POST['transfer_poin'];
    $poin_user = $_POST['poin_user'];
    $poin = $_POST['poin'];


    if($transfer_poin<$poin_user){
        $query1 = "update poin set jml_poin='$poin'+'$transfer_poin' where id_poin='$id_poin'";
        $query2 = "update poin set jml_poin='$poin_user'-'$transfer_poin' where nis='$nis_user'";
        $data1 = mysqli_query($koneksi,$query1);
        $data2 = mysqli_query($koneksi,$query2);
        $_SESSION["sukses"] = 'Poin Berhasil Ditransfer';
        header("location:beranda.php");
    }else{
        $_SESSION["gagal"] = 'Poin Gagal Ditransfer';
        header("location:beranda.php");
    }

?>