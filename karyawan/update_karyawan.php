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

    $ID_KARYAWAN = $_POST['ID_KARYAWAN'];
    $NAMA_KARYAWAN = $_POST['NAMA_KARYAWAN'];
    $USERNAME = $_POST['USERNAME'];
    $PASSWORD_KARYAWAN = $_POST['PASSWORD_KARYAWAN'];
    $ALAMAT_KARYAWAN = $_POST['ALAMAT_KARYAWAN'];
    $EMAIL_KARYAWAN = $_POST['EMAIL_KARYAWAN'];
    $NO_TELP = $_POST['NO_TELP'];
    $HAK_AKSES = $_POST['HAK_AKSES'];

    $sql = "UPDATE TBL_KARYAWAN SET NAMA_KARYAWAN = '$NAMA_KARYAWAN',USERNAME = '$USERNAME',PASSWORD_KARYAWAN = '$PASSWORD_KARYAWAN', ALAMAT_KARYAWAN = '$ALAMAT_KARYAWAN', EMAIL_KARYAWAN = '$EMAIL_KARYAWAN', NO_TELP = $NO_TELP, HAK_AKSES = '$HAK_AKSES' WHERE ID_KARYAWAN = $ID_KARYAWAN";
    $hasil = sqlsrv_query($conn, $sql);
    echo "<script>swal.fire('Yuhuuu', 'Berhasil Membuat Akun', 'success')</script>";
?>
<center>
    <h1>Kembali ke tampilan awal</h1>
    <a href="tampil_karyawan.php"><button class="btn btn-primary">Klik!</button></a>
</center>
</body>
</html>