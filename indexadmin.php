<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="css/admin.css">


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
            <a class="nav-link active" aria-current="page" href="indexadmin.php">Home</a>
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
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="logkaryawan.php">Log karyawan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="loglembur.php">Log Lembur</a>
          </li>
          </li>
        </ul>
        <a href="indexlogin.php" type="button" class="btn btn-primary btn-logout">Logout</a>

      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Background image -->
  <div class="bg-image d-flex justify-content-center align-items-center" style="
  background-image: url('asset/bg9.jpg');
  height: 100vh;
">
    <h1 class="text-dark judul">Selamat Datang <span class="adm">Admin</span></h1>
  </div>
  <!-- Background image -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  </body>

</html>