<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login">
    <center>Form Registrasi</center>
        <div class="container">
            <form action="" method="POST">
                <label> Username </label>
                <input type="text" name="username" id="name" placeholder="Username"/>
                <br>
                <label> Password </label>
                <input type="password" name="password" id="name" placeholder="Password"/>
                <br>
                <input type="submit" name="daftar" value="DAFTAR" class="tombol">
				<a href="index.php" class="tombol">login</a> 
            </form>
        </div>
    </div>
</body>

<?php
	include("koneksi.php");

if(isset($_POST['daftar'])){

if(empty($_POST['username']) || empty($_POST['password'])){
    echo '<script type="text/javascript"> alert("Mohon Isi Seluruh Form") </script>';
}else if(isset($_POST['daftar'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql ="INSERT INTO user (username,password) VALUES ('$username','$password')";
    $query = mysqli_query($db, $sql);
    
    if($query){
       	// kalau berhasil alihkan ke halaman index.php dengan status=sukses
			header('Location: index.php?status=sukses');
		} else {
			// kalau gagal alihkan ke halaman indek.php dengan status=gagal
			echo mysqli_error($db);
		
		}

}
}
?>

</html>