<?php
// No need to start the session on the home page
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
    <link rel="stylesheet" href="css/home.css">

    <title>Home</title>
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
                        <a class="nav-link active" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Close Navbar -->


    <!-- Container -->

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bg/atlet1.jpeg" class="d-block mx-auto " alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/bg/atlet2.jpeg" class="d-block mx-auto " alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/bg/atlet3.jpeg" class="d-block mx-auto " alt="...">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<br><br><br>
    <div class="about">
        <div class="row my-5">
            <div class="col-md-12 text-center">
                <h1 class="fw-bold">About HAPKIDO</h1>
                <br><br>
                <p style="text-align: left; font-weight: bold; font-size: 20px;">What is Hapkido?</p>
                <p class="lead">Hapkido is a dynamic and highly eclectic Korean martial art. It is a form of self-defense that employs joint locks, grappling and throwing techniques of other martial arts, as well as kicks,punches, and other striking attacks. There is also the use of traditional weapons, including knife, sword, rope, nunchaku, cane, short stick (dan bong), and staff (bong, gun, bō) which vary in emphasis depending on the particular tradition examined. Hapkido contains both long- and close-range fighting techniques, utilizing jumping kicks and percussive hand strikes at longer ranges and pressure point strikes, joint locks, or throws at closer fighting distances. Hapkido emphasizes circular motion, redirection of force,and control of the opponent. Practitioners seek to gain advantage through footwork and body positioning to incorporate the use of leverage, avoiding the use of strength against strength. The character 合 hap means "coordinated" or "joining"; 氣 ki describes internal energy, spirit, strength, or power; and 道 do means "way" or "art", yielding a literal translation of "joining-energy-way". It is most often translated as "the way of coordinating energy", "the way of coordinated power" or "the way of harmony".</p>
            </div>
        </div>
    </div>

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
