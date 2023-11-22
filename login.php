<?php
    include 'koneksi.php';
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Login Admin</title>
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link rel="stylesheet" href="assets/css/signin.css">
    <!-- my css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/1x/logo.png">
    
    
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Sweet alert -->
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
      
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      </style>


<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <?php
        if (isset($_POST['submit'])) {
            $USERNAME = $_POST['USERNAME'];
            $PASSWORD_KARYAWAN = $_POST['PASSWORD_KARYAWAN'];

            $sql = "SELECT * FROM TBL_KARYAWAN WHERE USERNAME='$USERNAME' AND PASSWORD_KARYAWAN='$PASSWORD_KARYAWAN'";
            $hasil = sqlsrv_query($conn, $sql);

            if ($hasil === false) {
                die(print_r(sqlsrv_errors(), true));
            }

            if ($hasil !== false) {
              while ($row = sqlsrv_fetch_array($hasil, SQLSRV_FETCH_ASSOC)) {
                  // Mengambil nilai dari setiap kolom dalam baris
                  // var_dump($row['HAK_AKSES']);die;
                  // admin login
                  if ($row['HAK_AKSES'] === 'admin') {
                    //set session
                    $_SESSION["login"] = true;
                    $_SESSION["level"] = 'admin';
                    
                    // Mengambil angka cabang dari ID KARYAWAN
                    $_SESSION['cabang'] = intval(substr($row['ID_KARYAWAN'], 0, 1));
                    
                    header("Location: karyawan/tampil_karyawan.php");
                  } else {
                    $_SESSION["login"] = true;
                    $_SESSION["level"] = 'superadmin';
                    $_SESSION['cabang'] = 1;
                    header("Location: karyawan/tampil_karyawan.php");
                  };
                  $_SESSION["logged_in_user"] = $row["USERNAME"];
                  $_SESSION["logged_in_nama"] = $row["NAMA_KARYAWAN"];
                  $_SESSION['id_karyawan'] = $row['ID_KARYAWAN'];
                  
              }
          } else {
            echo "<script>swal.fire('Gagal', 'USERNAME atau PASSWORD Anda salah. Silahkan coba lagi!', 'error')</script>";
          }

            // $row_count = sqlsrv_has_rows($hasil);

            // if ($row_count === true) {
            //     var_dump($row_count['USERNAME']);die;
            //   //set session
            //     $_SESSION["login"] = true;
            //     header("Location: karyawan/tampil_karyawan.php");
            // } else {
            //     echo "<script>swal.fire('Gagal', 'USERNAME atau PASSWORD Anda salah. Silahkan coba lagi!', 'error')</script>";
            // }
        }

  ?>
  
<main class="form-signin">
  <form method="POST">
    <h1 class="h3 mb-3 fw-normal"><b>Login</b></h1>

    <div class="form-floating">
      <input type="text" class="form-control" name="USERNAME" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput"  required>Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="PASSWORD_KARYAWAN" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword"  required>Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" id="tombol" name="submit" type="submit">Masuk</button>
    <p class="buatAkun">Belum punya akun? <a href="buatakunPeserta.php">Buat Akun</a></p>
  </form>
</main>


    
  </body>
</html>