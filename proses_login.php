<?php
//menyimpan data dari inputan login.php
$email 	= $_POST['email'];
$pass 	= $_POST['password'];

include 'koneksi.php';

//cek data ke database
//$sql = "SELECT * FROM user WHERE email='$email' and password='$pass'";
$sql = "SELECT * FROM user WHERE email='$email'";
$user = mysqli_query($konek, $sql);
$check = mysqli_num_rows($user);
//echo $check;

//menghitung jumlah data user bila lebih dari 0 maka berhasil
if (mysqli_num_rows($user) > 0) {
	//jika berhasil / data lebih dari 0 maka masuk ke blok ini
	session_start();
	$userData = mysqli_fetch_array($user);
	if (password_verify($pass,$userData['password'])) {
		// password benar
		$_SESSION['status_login'] = "sudah_login";
		$_SESSION['nama_user'] = $userData['nama_lengkap'];
		header("location:index.php");

	}else {
		header("location:login.php");

	}

}else {
	//jika gagal masuk ke blok ini
	header("location:login.php");

}

?>