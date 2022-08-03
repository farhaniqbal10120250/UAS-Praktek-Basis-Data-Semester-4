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
              <td><label> Tanggal </label></td>
              <td>
                <input type="date" name="tanggal"  />
              </td>
            </tr>
            <tr>
              <td><label> Keterangan </label></td>
              <td>
                <input type="text" name="keterangan"  />
              </td>
            </tr>
            <tr>
              <td><label> Jumlah Gaji </label></td>
              <td>
                <input type="text" name="jumlah_gaji"  />
              </td>
            </tr>
            <tr>
              <td><label> Jumlah Lembur </label></td>
              <td>
                <input type="text" name="jumlah_lembur"  />
              </td>
            </tr>
            <tr>
              <td><label> Total Gaji </label></td>
              <td>
                <input type="text" name="total_gaji"  />
              </td>
            </tr>
            <tr>
              <td><label> Id Karyawan </label></td>
              <td>
                <input type="text" name="id_karyawan"  />
              </td>
            </tr>
            <tr>
              <td><label> Jumlah Cuti </label></td>
              <td>
                <input type="text" name="jumlah_cuti"  />
              </td>
            </tr>
          </table>

          <div class="flex">
          <input type="submit" name="tambah" value="Tambah Jumlah" />
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
		$tanggal = $_POST['tanggal'];
		$keterangan = $_POST['keterangan'];
		$jumlah_gaji = $_POST['jumlah_gaji'];
        $jumlah_lembur = $_POST['jumlah_lembur'];
        $total_gaji = $_POST['total_gaji'];
        $id_karyawan = $_POST['id_karyawan'];
        $jumlah_cuti = $_POST['jumlah_cuti'];

		// buat query
		$sql = "INSERT INTO gaji (tanggal, keterangan, jumlah_gaji, jumlah_lembur, total_gaji, id_karyawan, jumlah_cuti) VALUES ( '$tanggal', '$keterangan','$jumlah_gaji','$jumlah_lembur','$total_gaji','$id_karyawan','$jumlah_cuti')";
		$query = mysqli_query($db, $sql);

		// apakah query simpan berhasil?
		if( $query ) {
			// kalau berhasil alihkan ke halaman index.php dengan status=sukses
			header('Location: gaji.php?status=sukses');
		} else {
			// kalau gagal alihkan ke halaman indek.php dengan status=gagal
			echo '<script type="text/javascript"> alert("Penambahan Data gagal") </script>';
		
		}



	}

	?>

</body>
</html>