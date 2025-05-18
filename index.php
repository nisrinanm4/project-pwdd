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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CodeNest</title>
    <link rel="stylesheet" href="CSS/style.css">

</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="index.html" class="logo">Code<span>Nest</span></a>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Materials</a>
            <a href="#">Quiz</a>
            <a href="update_profil.php" class="profile-icon">👤</a>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-text">
            <h1>Learn Basic Programming With C++</h1>
            <p>Belajar dasar - dasar pemrograman dengan menyenangkan bersama CodeNest!</p>
            <a href="#penjelasan" class="learn-btn">Learn More</a>
        </div>
        <div class="hero-img">
            <img src="Assets/logoc++.png" alt="Logo C++">
        </div>
    </div>

    <!-- Section Penjelasan -->
    <div class="section-bawah" id="penjelasan">
        <div class="left" style="text-align: justify">
            <h2>Apa Itu Bahasa Pemrograman C++?</h2>
            <p>
                Bahasa C++ adalah bahasa pemrograman tingkat menengah yang dikembangkan dari bahasa C dengan menambahkan
                fitur-fitur pemrograman berorientasi objek (OOP). Sebagai penerus bahasa C, C++ mempertahankan efisiensi
                dan kontrol tingkat rendah terhadap hardware serta manajemen memori, sambil menyediakan abstraksi yang
                lebih tinggi melalui konsep-konsep seperti kelas, objek, inheritance, dan polimorfisme.<br> <br>

                Dengan fleksibilitasnya yang tinggi, C++ cocok untuk berbagai tujuan, mulai dari pembelajaran dasar
                pemrograman (karena memperkenalkan logika pemrograman dan manajemen memori) hingga pengembangan aplikasi
                kompleks berskala besar. Bahasa ini juga menjadi fondasi bagi banyak teknologi modern, termasuk mesin
                game, database system, dan framework machine learning. Kombinasi antara kecepatan eksekusi, kontrol
                hardware, dan fitur OOP membuat C++ tetap relevan meskipun sudah berusia lebih dari 40 tahun.
            </p>
        </div>
        <div class="right">
            <h2>Materi Yang Dipelajari</h2>
            <ul>
                <li><strong>1.</strong> Pengenalan C++</li>
                <li><strong>2.</strong> Tipe Data</li>
                <li><strong>3.</strong> Variabel</li>
                <li><strong>4.</strong> Percabangan</li>
                <li><strong>5.</strong> Perulangan</li>
                <li><strong>6.</strong> Array</li>
                <li><strong>7.</strong> Fungsi</li>
            </ul>
            <a href="#" class="btn">Mulai</a>
        </div>
    </div>

</body>

</html>