<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
    include '../koneksi.php';

    $id=$_GET['id'];
    
    $sql="DELETE FROM TBL_KARYAWAN WHERE ID_KARYAWAN = $id";
    $hasil = sqlsrv_query($conn, $sql);
    echo"<script type='text/javascript'>alert('Berhasil menghapus data');document.location.href='tampil_karyawan.php'</script>";
    
?>  
</body>
</html>