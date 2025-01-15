<?php
include "koneksi.php";

$nama_produk = $_POST["nama_produk"];
$harga = $_POST["harga"];

//tipe data array
$nama_foto = $_FILES["foto"]["name"];
$lokasi_tmp = $_FILES["foto"]["tmp_name"];

$query = mysqli_query($koneksi, "insert into tambah_produk values ($nama_produk, $harga, $foto) ");

move_uploaded_file($lokasi_tmp, "foto/$nama_foto");
?>
