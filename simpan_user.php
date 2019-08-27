<?php

$nama_lengkap 	= $_POST['nama_lengkap'];
$option			= array("cost" => 4);
$pass 		 	= password_hash($_POST['password'],PASSWORD_BCRYPT,$option);
$email 			= $_POST['email'];

include 'koneksi.php';
$sql = "INSERT into user SET nama_lengkap='$nama_lengkap',email='$email',password='$pass'";
$insert = mysqli_query($konek, $sql);

//print_r($_POST);
//die;
/*if($insert){
	echo "berhasil";
}else{
	echo "gagal";
}*/

header("location:user.php");
?>
