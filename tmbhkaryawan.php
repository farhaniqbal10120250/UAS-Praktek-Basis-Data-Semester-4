<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style1.css" />
</head>		
  <body>
    <h1>Form tambah Cuti</h1>
    <div class="wrap">
      <div class="container">
        <form action="" method="POST">
          <table>
            <tr>
              <td><label> Id Karyawan </label></td>
              <td>
                <input type="text" name="id_karyawan"  />
              </td>
            </tr>
            <tr>
              <td><label> Nama  </label></td>
              <td>
                <input type="text" name="nama"  />
              </td>
            </tr>
            <tr>
              <td><label> Tanggal Lahir </label></td>
              <td>
                <input type="date" name="tgl_lahir"  />
              </td>
            </tr>
            <tr>
              <td><label> Jenis Kelamin </label></td>
              <td>
                <input type="text" name="jk"  />
              </td>
            </tr>
            <tr>
              <td><label> Alamat </label></td>
              <td>
                <input type="text" name="alamat"  />
              </td>
            </tr>
            <tr>
              <td><label> Telepon </label></td>
              <td>
                <input type="text" name="telepon"  />
              </td>
            </tr>
          </table>

          <div class="flex">
          <input type="submit" name="tambah" value="Tambah Karyawan" />
          <li><a href="indexadmin.php" class="kluar">kembali</a></li>
        </form>
        </div>
      </div>
    </div>


	<?php

	include("koneksi.php");

	// cek apakah tombol daftar sudah diklik atau blum?
	if(isset($_POST['tambah'])){

		// ambil data dari formulir
		$id_karyawan = $_POST['id_karyawan'];
		$nama = $_POST['nama'];
		$tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat']; 
        $telepon = $_POST['telepon'];

		// buat query
		$sql = "INSERT INTO karyawan (id_karyawan, nama, tgl_lahir, jk, alamat, telepon) VALUES ( '$id_karyawan', '$nama','$tgl_lahir','$jk','$alamat','$telepon')";
		$query = mysqli_query($db, $sql);

		// apakah query simpan berhasil?
		if( $query ) {
			// kalau berhasil alihkan ke halaman index.php dengan status=sukses
			header('Location: karyawan.php?status=sukses');
		} else {
			// kalau gagal alihkan ke halaman indek.php dengan status=gagal
			echo mysqli_error($db); 
		
		}



	}

	?>

</body>
</html>