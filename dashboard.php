<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/dashboard.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">Pengelolaan Surat</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="surat_masuk.php">Surat Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="surat_keluar.php">Surat Keluar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="konten">
        <div class="keterangan">
            <div class="penjelasan">
                <h1>Sistem Generate Surat Masuk & Keluar </h1>
                <p>Sistem generate surat masuk dan keluar untuk uji kompetensi 2024</p>
            </div>
        </div>
        <div class="let-get">
            <a class="surat-masuk" href="surat_masuk.php">Surat Masuk</a>
            <a class="surat-keluar" href="surat_keluar.php">Surat Keluar</a>
        </div>

    </div>

    <div class="image">
        <img src="letter-1720755480050-4266.jpg" alt="">
    </div>



    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>