<?php
$id_user = $_GET['id'];

if($id_user){

	include 'koneksi.php';
	$delete = mysqli_query($konek, "DELETE FROM user WHERE id_user='$id_user'");

}else{

	echo "Data Gagal Di Simpan";
}

header("location:user.php");
?>