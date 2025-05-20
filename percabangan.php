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
    <h1 class="tutorial-title">Percabangan</h1>

    <div class="tutorial-container">
        <!-- SECTION 1 -->
        <h2 class="section-title">1. Pengertian</h2>
        <p class="content-text justify">
    Percabangan adalah salah satu konsep dasar dalam pemrograman yang memungkinkan program mengambil keputusan berdasarkan kondisi tertentu. Dalam C++, percabangan digunakan untuk mengontrol alur eksekusi program sehingga dapat menjalankan kode yang berbeda sesuai dengan hasil evaluasi suatu kondisi.</p>

        <br>
        <!-- SECTION 2 -->
        <h2 class="section-title">2. Jenis-Jenis Percabangan</h2>
        
        <p class="content-text">Ada 4 jenis percabangan yaitu:</p>
        <p class="content-text">a. Percabangan if</p>
        <p class="content-text">Percabangan if digunakan untuk mengeksekusi satu blok kode jika kondisi yang diberikan bernilai benar (true). Jika kondisi tidak terpenuhi, maka blok kode di dalam if tidak dijalankan.</p>
        <div class="code-block">
        <span class="comment">// Percabangan if</span><br>
            <br>
            <span class="type">if</span> (kondisi) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;// kode yang dijalankan jika kondisi benar<br>
            }
        </div>
        <p class="content-text">b. Percabangan if-else</p>
        <p class="content-text">Percabangan if-else digunakan ketika ada dua kemungkinan aksi: satu untuk kondisi benar, dan satu lagi untuk kondisi salah.</p>
        <div class="code-block">
        <span class="comment">// Percabangan if-else</span><br>
            <br>
            <span class="type">if</span> (kondisi) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;// kode jika kondisi benar<br>
            } else {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;// kode jika kondisi salah<br>
            }
        </div>
        <p class="content-text">c. Percabangan if-else if-else</p>
        <p class="content-text">Digunakan ketika ada lebih dari dua kemungkinan kondisi yang ingin diuji.</p>
        <div class="code-block">
        <span class="comment">// Percabangan if-else if-else</span><br>
            <br>
            <span class="type">if</span> (kondisi1) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;// kode jika kondisi1 benar<br>
            } else if (kondisi2) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;// kode jika kondisi2 benar<br>
            } else {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;// kode jika semua kondisi di atas salah<br>
            }
        </div>
        <p class="content-text">d. Percabangan switch-case</p>
        <p class="content-text">switch-case digunakan untuk memilih salah satu dari banyak kemungkinan aksi berdasarkan nilai sebuah variabel atau ekspresi. Cocok digunakan jika terdapat banyak pilihan yang mungkin.</p>
        <div class="code-block">
        <span class="comment">// Percabangan switch-case</span><br>
            <br>
            <span class="type">switch</span> (ekspresi) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="type">case</span> nila1:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// kode jika ekspresi == nilai1<br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="type">case</span> nila2:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// kode jika ekspresi == nilai2<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="type">break;</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;// ...<br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="type">default:</span><br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// kode jika tidak ada yang cocok<br>
            }
        </div>
        <br>

        <!-- SECTION 3 -->
        <h2 class="section-title">3. Ringkasan</h2>
        <table>
        <tr>
            <th>Struktur Percabangan</th>
            <th>Fungsi</th>
            <th>Contoh Penggunaan</th>
        </tr>
        <tr>
            <td>if</td>
            <td>Mengeksekusi kode jika kondisi benar</td>
            <td>Memeriksa apakah nilai lulus</td>
        </tr>
        <tr>
            <td>if-else</td>
            <td>Mengeksekusi kode jika kondisi benar atau salah</td>
            <td>Menentukan lulus atau tidak lulus</td>
        </tr>
        <tr>
            <td>if-else if-else</td>
            <td>Memeriksa beberapa kondisi secara berurutan</td>
            <td>Menentukan nilai huruf berdasarkan angka</td>
        </tr>
        <tr>
            <td>switch</td>
            <td>Memilih salah satu dari banyak kasus</td>
            <td>Menampilkan nama hari berdasarkan nomor hari</td>
        </tr>
    </table>
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