<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_lembur = $_POST['id_lembur'];
    $jumlah = $_POST['jumlah'];

    // buat query update
    $sql = "UPDATE lembur SET jumlah='$jumlah' WHERE id_lembur=$id_lembur";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: lembur.php');
    } else {
        // kalau gagal tampilkan pesan
        echo mysqli_error($db); 
    }


} else {
    echo mysqli_error($db); 
}

?>
