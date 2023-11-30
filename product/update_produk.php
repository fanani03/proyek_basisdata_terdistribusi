<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
    include "../koneksi.php";

    $ID_PRODUK = $_POST['ID_PRODUK'];
    $ID_CABANG = $_POST['ID_CABANG'];
    $NAMA_PRODUK = $_POST['NAMA_PRODUK'];
    $HARGA_BELI = $_POST['HARGA_BELI'];
    $HARGA_JUAL = $_POST['HARGA_JUAL'];
    $STOK = $_POST['STOK'];


    $sql = "UPDATE TBL_PRODUK SET ID_CABANG = $ID_CABANG, NAMA_PRODUK = '$NAMA_PRODUK', HARGA_BELI = $HARGA_JUAL, HARGA_JUAL = $HARGA_JUAL, STOK = $STOK WHERE ID_PRODUK = $ID_PRODUK";
    $hasil = sqlsrv_query($conn, $sql);
    echo "<script>swal.fire('Yuhuuu', 'Berhasil Membuat Akun', 'success')</script>";
?>
<center>
    <h1>Kembali ke tampilan awal</h1>
    <a href="tampil_produk.php"><button class="btn btn-primary">Klik!</button></a>
</center>
</body>
</html>