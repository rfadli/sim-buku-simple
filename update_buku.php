<?php

$isbn 			= $_POST['isbn'];
$judul_buku 	= $_POST['judul_buku'];
$penulis 		= $_POST['penulis'];
$kategori 		= $_POST['kategori'];
$deskripsi 		= $_POST['deskripsi'];
$harga 			= $_POST['harga'];

include 'koneksi.php';
$sql = "UPDATE buku SET judul_buku='$judul_buku',harga='$harga',
		id_kategori='$kategori',id_penulis='$penulis',deskripsi='$deskripsi'
		WHERE isbn='$isbn'";
$update = mysqli_query($konek, $sql);

//print_r($_POST);
//die;
/*if($insert){
	echo "berhasil";
}else{
	echo "gagal";
}*/

header("location:index.php");
?>