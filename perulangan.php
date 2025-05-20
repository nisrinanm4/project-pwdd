<?php
include 'koneksi.php';
session_start();

// Cek apakah session email sudah ada (user sudah login)
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeNest</title>
    <link rel="stylesheet" href="CSS/pengenalan.css">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="index.php" class="logo">Code<span>Nest</span></a>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="materi.php" class="active">Materi</a>
            <a href="#">Quiz</a>
            <a href="update_profil.php" class="profile-icon">👤</a>
        </div>
    </div>

    <main>
    <!-- TUTORIAL TITLE -->
    <h1 class="tutorial-title">Perulangan</h1>

    <div class="tutorial-container">
        <!-- SECTION 1 -->
        <h2 class="section-title">1. Pengertian</h2>
        <p class="content-text justify">
    Perulangan (loop) adalah proses menjalankan satu atau beberapa baris kode secara berulang selama kondisi tertentu terpenuhi. Perulangan berguna untuk menghindari penulisan kode yang sama berulang-ulang dan memudahkan pengolahan data yang banyak.</p>
        <br>
        <!-- SECTION 2 -->
        <h2 class="section-title">2. Jenis-Jenis Perulangan</h2>
        
        <p class="content-text">Ada 3 jenis perulangan utama:</p>
        <p class="content-text">a. Perulangan For</p>
        <p class="content-text">Perulangan for digunakan ketika jumlah pengulangan sudah diketahui sebelumnya. Struktur for terdiri dari tiga bagian: inisialisasi, kondisi, dan perubahan nilai.</p>
        <div class="code-block">
        <span class="comment">// Perulangan if</span><br>
            <br>
            <span class="type">for</span> (inisialisasi; kondisi; perubahan) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;// kode yang diulang<br>
            }
        </div>
        <p class="content-text">b. Perulangan while</p>
        <p class="content-text">Perulangan while digunakan saat jumlah pengulangan belum diketahui pasti dan bergantung pada kondisi yang dicek sebelum menjalankan kode.</p>
        <div class="code-block">
        <span class="comment">// Perulangan while</span><br>
            <br>
            <span class="type">while</span> (kondisi) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;// kode yang diulang<br>
            }<br>
        </div>
        <p class="content-text">c. Perulangan Do-while</p>
        <p class="content-text">Perulangan do-while mirip dengan while, tetapi kondisi dicek setelah kode dijalankan, sehingga perulangan dijalankan minimal satu kali.</p>
        <div class="code-block">
        <span class="comment">// Perulangan Do-while</span><br>
            <br>
            <span class="type">do </span>{<br>
            &nbsp;&nbsp;&nbsp;&nbsp;// kode yang diulang<br>
            } <span class="type">while </span>(kondisi);<br>
        </div>
    <br>
    </div>

    <!-- NAVIGATION BUTTONS -->
    <div class="nav-buttons">
        <a href="materi.php"><button class="nav-button">Kembali</button></a>
        <a href=""><button class="nav-button">Lanjut</button></a>
    </div>
</main>

</body>
</html>
        