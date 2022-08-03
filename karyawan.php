<!doctype html>
<html lang="en">
<?php include("koneksi.php"); ?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Link Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: 'Quicksand', sans-serif;
    }

    body {
      background: #082A3A !important;
    }

    thead {
      background: #082A3A !important;
      color: azure !important;
    }

    tbody {
      background: #082A3A !important;
      color: azure !important;
    }

    th {
      padding-top: 20px !important;
      padding-bottom: 20px !important;
    }
  </style>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

<div class="container-fluid">
  <!-- Toggle button -->
  <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarLeftAlignExample" aria-controls="navbarLeftAlignExample" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Collapsible wrapper -->
  <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
    <!-- Left links -->
    <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </li>
      <!-- Navbar dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Kelola Data
        </a>
        <!-- Dropdown menu -->
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li>
            <a class="dropdown-item" href="cuti.php">Data Cuti</a>
          </li>
          <li>
            <a class="dropdown-item" href="gaji.php">Data Gaji</a>
          </li>
          <li>
            <a class="dropdown-item" href="jabatan.php">Data jabatan</a>
          </li>
          <li>
            <a class="dropdown-item" href="karyawan.php">Data karyawan</a>
          </li>
          <li>
            <a class="dropdown-item" href="lembur.php">Data lembur</a>
          </li>
        </ul>
      </li>
    </ul>
    <a href="../indexlogin.php" type="button" class="btn btn-primary btn-logout">Logout</a>

  </div>
  <!-- Collapsible wrapper -->
</div>
<!-- Container wrapper -->
</nav>
        
  <table class="table align-middle mb-0 bg-white text-center pt-3">
    <thead class="head">
              <tr>
                <th>Id Karyawan</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM karyawan";
              $query = mysqli_query($db, $sql);
        
              while($karyawan = mysqli_fetch_array($query)){
                echo "<tr>";
        
                echo "<td>".$karyawan['id_karyawan']."</td>";
                echo "<td>".$karyawan['nama']."</td>";
                echo "<td>".$karyawan['tgl_lahir']."</td>";
                echo "<td>".$karyawan['jk']."</td>";
                echo "<td>".$karyawan['alamat']."</td>";
                echo "<td>".$karyawan['telepon']."</td>";
                echo "<td>";
                echo "<a href='editkaryawan.php?id_karyawan=".$karyawan['id_karyawan']."'><button>Edit</button></a> | ";
                echo "<a href='hapuskaryawan.php?id_karyawan=".$karyawan['id_karyawan']."'><button>Hapus</button></a>";
                echo "</td>";
  
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
          <center>
  <br><a href="tmbhkaryawan.php"><button>tambah karyawan</button></a></br>
	<br><a href="indexadmin.php"><button>kembali ke admin</button></a></br>
      </center>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  </body>
</html>


