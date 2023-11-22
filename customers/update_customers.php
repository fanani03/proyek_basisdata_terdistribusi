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

    $ID_PELANGGAN = $_POST['ID_PELANGGAN'];
    $NAMA_PELANGGAN = $_POST['NAMA_PELANGGAN'];
    $ALAMAT_PELANGGAN = $_POST['ALAMAT_PELANGGAN'];
    $EMAIL_PELANGGAN = $_POST['EMAIL_PELANGGAN'];
    $NO_TEPL = $_POST['NO_TEPL'];

    $sql = "UPDATE TBL_PELANGGAN SET NAMA_PELANGGAN = '$NAMA_PELANGGAN', ALAMAT_PELANGGAN = '$ALAMAT_PELANGGAN', EMAIL_PELANGGAN = '$EMAIL_PELANGGAN', NO_TEPL = $NO_TEPL WHERE ID_PELANGGAN = $ID_PELANGGAN";
    $hasil = sqlsrv_query($conn, $sql);
    echo "<script>swal.fire('Yuhuuu', 'Berhasil Membuat Akun', 'success')</script>";
?>
<center>
    <h1>Kembali ke edit customers</h1>
    <a href="tampil_customers.php"><button class="btn btn-primary">Klik!</button></a>
</center>
</body>
</html>