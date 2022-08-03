<?php
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($db,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0) {
	$data = mysqli_fetch_assoc($login);
	//menyimpan session user, nama, status dan id login
	$_SESSION['username'] = $username;
	header("location:indexadmin.php");
} else {
    echo "
			<div class='alert alert-danger'>Username atau password anda salah</div>
		";
	    
}
?>