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
              <td><label> Id Lembur </label></td>
              <td>
                <input type="text" name="id_lembur"  />
              </td>
            </tr>
            <tr>
              <td><label> Id Karyawan </label></td>
              <td>
                <input type="text" name="id_karyawan"  />
              </td>
            </tr>
            <tr>
              <td><label> Tanggal </label></td>
              <td>
                <input type="date" name="tanggal_lembur"  />
              </td>
            </tr>
            <tr>
              <td><label> Jumlah </label></td>
              <td>
                <input type="text" name="jumlah"  />
              </td>
            </tr>
          </table>

          <div class="flex">
          <input type="submit" name="tambah" value="Tambah lembur" />
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
		$id_lembur = $_POST['id_lembur'];
		$id_karyawan = $_POST['id_karyawan'];
		$tanggal_lembur = $_POST['tanggal_lembur'];
        $jumlah = $_POST['jumlah'];

		// buat query
		$sql = "INSERT INTO lembur (id_lembur, id_karyawan, tanggal_lembur, jumlah) VALUES ( '$id_lembur', '$id_karyawan','$tanggal_lembur','$jumlah')";
		$query = mysqli_query($db, $sql);

		// apakah query simpan berhasil?
		if( $query ) {
			// kalau berhasil alihkan ke halaman index.php dengan status=sukses
			header('Location: lembur.php?status=sukses');
		} else {
			// kalau gagal alihkan ke halaman indek.php dengan status=gagal
			echo '<script type="text/javascript"> alert("Penambahan Data gagal") </script>';
		
		}



	}

	?>

</body>
</html>