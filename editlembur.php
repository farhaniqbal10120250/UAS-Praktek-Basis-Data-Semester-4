<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_lembur']) ){
    header('Location: karyawan.php');
}

//ambil id dari query string
$id_lembur = $_GET['id_lembur'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM lembur WHERE id_lembur=$id_lembur";
$query = mysqli_query($db, $sql);
$lembur  = mysqli_fetch_assoc($query);

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
		<h1>Form Edit lembur</h1>
        <form action="proseseditlembur.php" method="POST">
			<div class="wrap">
			  <div class="container">
				<form action="" method="POST">
				  <table>
                  <tr>
                    <td><label>ID Lembur</label></td>
				  <td>
					<input
					  type="text"
					  name="id_lembur"
					  id="name"
					  value="<?php echo $lembur['id_lembur'] ?>"
					/>
				  </td>
				</tr>
					<tr>
                    <td><label>jumlah</label></td>
				  <td>
					<input
					  type="text"
					  name="jumlah"
					  id="name"
					  value="<?php echo $lembur['jumlah'] ?>"
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