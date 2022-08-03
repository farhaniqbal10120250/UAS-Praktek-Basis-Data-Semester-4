<?php

include("koneksi.php");

if( isset($_GET['kd_jabatan']) ){

    // ambil id dari query string
    $kd_jabatan = $_GET['kd_jabatan'];

    // buat query hapus
    $sql = "DELETE FROM jabatan WHERE kd_jabatan=$kd_jabatan";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: jabatan.php');
    } else {
        ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
    }

} else {
    ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
}

?>