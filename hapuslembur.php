<?php

include("koneksi.php");

if( isset($_GET['id_lembur']) ){

    // ambil id dari query string
    $id_lembur = $_GET['id_lembur'];

    // buat query hapus
    $sql = "DELETE FROM lembur WHERE id_lembur = $id_lembur"; 
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: lembur.php');
    } else {
        echo mysqli_error($db); 
    }

} else {
    echo mysqli_error($db); 
}

?>