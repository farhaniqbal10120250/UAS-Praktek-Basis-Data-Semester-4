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
              <td><label> Kode Jabatan </label></td>
              <td>
                <input type="text" name="kd_jabatan"  />
              </td>
            </tr>
            <tr>
              <td><label> Nama Jabatan </label></td>
              <td>
                <input type="text" name="nama_jabatan"  />
              </td>
            </tr>
            <tr>
              <td><label> Level </label></td>
              <td>
                <input type="text" name="tingkatan"  />
              </td>
            </tr>
            <tr>
              <td><label> Gaji Pokok </label></td>
              <td>
                <input type="text" name="gaji_pokok"  />
              </td>
            </tr>
            <tr>
              <td><label> Transport </label></td>
              <td>
                <input type="text" name="transport"  />
              </td>
            </tr>
          </table>

          <div class="flex">
          <input type="submit" name="tambah" value="Tambah Jabatan" />
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
		$kd_jabatan = $_POST['kd_jabatan'];
		$nama_jabatan = $_POST['nama_jabatan'];
		$tingkatan = $_POST['tingkatan'];
        $gaji_pokok = $_POST['gaji_pokok'];
        $transport = $_POST['transport'];

		// buat query
		$sql = "INSERT INTO jabatan (kd_jabatan, nama_jabatan, tingkatan, gaji_pokok, transport) VALUES ( '$kd_jabatan', '$nama_jabatan','$tingkatan','$gaji_pokok','$transport')";
		$query = mysqli_query($db, $sql);

		// apakah query simpan berhasil?
		if( $query ) {
			// kalau berhasil alihkan ke halaman index.php dengan status=sukses
			header('Location: jabatan.php?status=sukses');
		} else {
			// kalau gagal alihkan ke halaman indek.php dengan status=gagal
			echo '<script type="text/javascript"> alert("Penambahan Data gagal") </script>';
		
		}



	}

	?>

</body>
</html>