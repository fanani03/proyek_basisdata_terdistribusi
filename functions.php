<?php
$serverName = "DESKTOP-JSTOPU8";
 // Nama server SQL Server
$connectionOptions = array(
    "Database" => "N1_toko", // Nama database
    "Uid" => "admin",      // Nama pengguna SQL Server
    "PWD" => "admin",
    "TrustServerCertificate" => "True"          // Kata sandi SQL Server
);

// Membuat koneksi
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Memeriksa koneksi
if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}

echo "";

// Contoh query
$query = "SELECT * FROM TBL_PRODUK INNER JOIN TBL_CABANG ON TBL_PRODUK.ID_CABANG = TBL_CABANG.ID_CABANG WHERE TBL_PRODUK.ID_CABANG = 1";
$result = sqlsrv_query($conn, $query);

// Mengecek apakah query berhasil dijalankan
if ($result === false) {
    die(print_r(sqlsrv_errors(), true));
}




?>


