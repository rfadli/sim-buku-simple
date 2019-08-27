<?php

$nama_lengkap 	= $_POST['nama_lengkap'];
$pass 		 	= $_POST['password'];
$email 			= $_POST['email'];
$id_user		= $_POST['id_user'];

include 'koneksi.php';
if(empty($pass)){

	$sql = "UPDATE user SET nama_lengkap='$nama_lengkap',email='$email' WHERE id_user='$id_user'";	
}else{

	$sql = "UPDATE user SET nama_lengkap='$nama_lengkap',email='$email',password='$pass' WHERE id_user='$id_user'";
}

$update = mysqli_query($konek, $sql);

//print_r($_POST);
//die;
/*if($insert){
	echo "berhasil";
}else{
	echo "gagal";
}*/

header("location:user.php");
?>