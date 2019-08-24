<?php

$isbn 			= $_POST['isbn'];
$judul_buku 	= $_POST['judul_buku'];
$penulis 		= $_POST['penulis'];
$kategori 		= $_POST['kategori'];
$deskripsi 		= $_POST['deskripsi'];

include 'koneksi.php';
$sql = "INSERT into buku SET isbn='$isbn',judul_buku='judul_buku',
		id_kategori='$kategori',id_penulis='p$penulis',deskripsi='$deskripsi'";
$insert = mysqli_query($konek, $sql);
if($insert){
	echo "berhasil";
}else{
	echo "gagal";
}
?>