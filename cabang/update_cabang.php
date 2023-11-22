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

    $ID_CABANG = $_POST['ID_CABANG'];
    $NAMA_CABANG = $_POST['NAMA_CABANG'];
    $ALAMAT = $_POST['ALAMAT'];

    $sql = "UPDATE TBL_CABANG SET NAMA_CABANG = '$NAMA_CABANG', ALAMAT = '$ALAMAT' WHERE ID_CABANG = $ID_CABANG";
    $hasil = sqlsrv_query($conn, $sql);
    echo "<script>swal.fire('Yuhuuu', 'Berhasil Membuat Akun', 'success')</script>";
?>
<center>
    <h1>Kembali ke tampilan awal</h1>
    <a href="tampil_cabang.php"><button class="btn btn-primary">Klik!</button></a>
</center>
</body>
</html>