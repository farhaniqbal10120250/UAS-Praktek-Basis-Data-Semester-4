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
              <td><label> Tanggal Cuti </label></td>
              <td>
                <input type="date" name="tanggal_cuti"  />
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
          <input type="submit" name="tambah" value="Tambah Cuti" />
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
		$tanggal_cuti = $_POST['tanggal_cuti'];
		$jumlah = $_POST['jumlah'];

		// buat query
		$sql = "INSERT INTO cuti (id_karyawan, tanggal_cuti, jumlah) VALUES ( '$id_karyawan', '$tanggal_cuti','$jumlah')";
		$query = mysqli_query($db, $sql);

		// apakah query simpan berhasil?
		if( $query ) {
			// kalau berhasil alihkan ke halaman index.php dengan status=sukses
			header('Location: cuti.php?status=sukses');
		} else {
			// kalau gagal alihkan ke halaman indek.php dengan status=gagal
			echo '<script type="text/javascript"> alert("Penambahan Data gagal") </script>';
		
		}



	}

	?>

</body>
</html>