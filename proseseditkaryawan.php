<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_karyawan = $_POST['id_karyawan'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    // buat query update
    $sql = "UPDATE karyawan SET alamat='$alamat', telepon='$telepon' WHERE id_karyawan=$id_karyawan";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: karyawan.php');
    } else {
        // kalau gagal tampilkan pesan
        echo mysqli_error($db); 
    }


} else {
    echo mysqli_error($db); 
}

?>
