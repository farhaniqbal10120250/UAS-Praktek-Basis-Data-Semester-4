<?php

include("koneksi.php");

if( isset($_GET['id_cuti']) ){

    // ambil id dari query string
    $id_cuti = $_GET['id_cuti'];

    // buat query hapus
    $sql = "DELETE FROM cuti WHERE id_cuti=$id_cuti";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: cuti.php');
    } else {
        ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
    }

} else {
    ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
}

?>