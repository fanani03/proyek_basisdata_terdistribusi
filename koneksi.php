<?php
$serverName = "DESKTOP-JSTOPU8";// Nama server SQL Server
$connectionOptions = array(
    "Database" => "toko_coba", // Nama database
    "Uid" => "",      // Nama pengguna SQL Server
    "PWD" => "",
    "TrustServerCertificate" => "True"        // Kata sandi SQL Server
);

// Membuat koneksi
$conn = sqlsrv_connect($serverName, $connectionOptions);
?>
