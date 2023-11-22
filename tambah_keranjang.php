<?php
session_start();

// ID produk dan informasi lainnya yang didapat dari formulir atau parameter URL
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

// Struktur data produk dalam session
$data_produk = array(
    'id_produk' => $id_produk,
    'nama_produk' => $nama_produk,
    'harga' => $harga,
    'jumlah' => $jumlah
);

// Tambahkan produk ke dalam keranjang belanja
$_SESSION['keranjang'][$id_produk] = $data_produk;

// Redirect ke halaman lain atau kembali ke halaman produk
header("Location: pembelian.php");
exit();


?>