<?php
session_start();
// Jika bisa login maka ke index.php
if (isset($_SESSION['home'])) {
    header('location:index.php');
    exit;
}

// Memanggil atau membutuhkan file function.php
require 'function.php';

// jika tombol yang bernama login diklik
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    // password menggunakan md5

    // mengambil data dari user dimana username yg diambil
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    $cek = mysqli_num_rows($result);

    // jika $cek lebih dari 0, maka berhasil login dan masuk ke index.php
    if ($cek > 0) {
        $_SESSION['home'] = true;

        header('location:index.php');
        exit;
    }
    // jika $cek adalah 0 maka tampilkan error
    $error = true;  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/login.css">

    <title>Login</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">H A P K I D O</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- Close Navbar -->

    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 text-center login" style="background-color : #000;">
                <h4 class="fw-bold">LOGIN</h4>
                <!-- Ini Error jika tidak bisa login -->
                <?php if (isset($error)) : ?>
                    <?php echo '<script>alert("Username atau Password Salah!");</script>'; ?>
                <?php endif; ?>
                <form action="" method="post">
                    <div class="form-group user">
                        <input type="text" class="form-control w-50" placeholder="Masukkan Username" name="username" autocomplete="off" required>
                    </div>
                    <div class="form-group my-5">
                        <input type="password" class="form-control w-50" placeholder="Masukkan Password" name="password" autocomplete="off" required>
                    </div>
                    <button class="btn btn-primary text-uppercase" type="submit" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>

<br><br><br>

     <!-- Footer -->
     <div class="container-fluid">
        <div class="row bg-dark text-white">
            <div class="col-md-6 my-2" id="about">
                <h4 class="fw-bold text-uppercase" style="right : 20px">What is Hapkido?</h4>
                <p>Hapkido is a dynamic and highly eclectic Korean martial art. It is a form of self-defense that employs joint locks, grappling and throwing techniques of other martial arts, as well as kicks,punches, and other striking attacks.</p>
            </div>
            <div class="col-md-6 my-2 text-center link">
                <h4 class="fw-bold text-uppercase">Account Links</h4>
                <a href="https://wa.me/qr/7SU57GCUTYSTA1" target="_blank"><i class="bi bi-whatsapp fs-3"></i></a>
                <a href="https://www.facebook.com/hapkidojawatengah?mibextid=rS40aB7S9Ucbxw6v" target="_blank"><i class="bi bi-facebook fs-3"></i></a>
                <a href="https://www.instagram.com/hapkido_jepara?igsh=MW43MzBmczdyNWJ2cg==" target="_blank"><i class="bi bi-instagram fs-3"></i></a>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white text-center" style="padding: 5px;">
        <p>Created by <u style="color: #fff;">EsaAN2024</u></p>
    </footer>
    <!-- Close Footer -->




    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>