<?php

include("koneksi.php");

if( isset($_GET['id_gaji']) ){

    // ambil id dari query string
    $id_gaji = $_GET['id_gaji'];

    // buat query hapus
    $sql = "DELETE FROM gaji WHERE id_gaji=$id_gaji";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: gaji.php');
    } else {
        ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
    }

} else {
    ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
}

?>