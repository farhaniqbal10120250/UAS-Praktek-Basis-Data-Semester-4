<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_karyawan']) ){
    header('Location: karyawan.php');
}

//ambil id dari query string
$id_karyawan = $_GET['id_karyawan'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM karyawan WHERE id_karyawan=$id_karyawan";
$query = mysqli_query($db, $sql);
$karyawan    = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<link rel="stylesheet" href="style1.css" />
	</head>		
	  <body>
		<h1>Form Edit Karyawan</h1>
        <form action="proseseditkaryawan.php" method="POST">
			<div class="wrap">
			  <div class="container">
				<form action="" method="POST">
				  <table>
                  <tr>
                    <td><label>ID Karyawan</label></td>
				  <td>
					<input
					  type="text"
					  name="id_karyawan"
					  id="name"
					  value="<?php echo $karyawan['id_karyawan'] ?>"
					/>
				  </td>
				</tr>
					<tr>
                    <td><label>alamat</label></td>
				  <td>
					<input
					  type="text"
					  name="alamat"
					  id="name"
					  value="<?php echo $karyawan['alamat'] ?>"
					/>
				  </td>
				</tr>
				<tr>
				  <td><label>telepon</label></td>
				  <td>
					<input
					  type="text"
					  name="telepon"
					  id="name"
					  value="<?php echo $karyawan['telepon'] ?>"
					/>
				  </td>
				</tr>
			  </table>

			  <div class="flex">
			  <input type="submit" name="simpan" value="simpan" />
			  <li><a href="indexadmin.php" class="kluar">kembali</a></li>
			</form>
			</div>
		  </div>
		</div>