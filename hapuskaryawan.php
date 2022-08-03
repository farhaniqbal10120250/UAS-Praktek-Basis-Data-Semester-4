<?php

include("koneksi.php");

if( isset($_GET['id_karyawan']) ){

    // ambil id dari query string
    $id_karyawan = $_GET['id_karyawan'];

    // buat query hapus
    $sql = "DELETE FROM karyawan WHERE id_karyawan=$id_karyawan";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: karyawan.php');
    } else {
        ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
    }

} else {
    ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
}

?>