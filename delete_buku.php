<?php
$isbn = isset($_GET['isbn']);

if($isbn){

	include 'koneksi.php';
	$delete = mysqli_query($konek, "DELETE FROM buku WHERE isbn='$isbn'");

}else{

	echo "Data Gagal Di Simpan";
}

header("location:index.php");
?>