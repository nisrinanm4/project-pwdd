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
    Array adalah struktur data yang digunakan untuk menyimpan sekumpulan data dengan tipe yang sama dalam satu variabel. Data dalam array disimpan secara berurutan dan setiap elemen dapat diakses menggunakan indeks yang dimulai dari 0.</p>
        <br>
         <!-- SECTION 2 -->
        <h2 class="section-title">2. Deklarasi dan Inisialisasi Array</h2>
        <p class="content-text">a. Deklarasi array:</p>
        <div class="code-block"><br>
             &nbsp;tipe_data nama_array[jumlah_elemen];<br><br>
        </div>
        
        <p class="content-text">&nbsp;&nbsp;&nbsp;&nbsp;Contoh:</p>
        <div class="code-block"><br>
            <span class="type">int</span> nilai [<span class="type">10</span>];
            <span class="comment">// array integer dengan 10 elemen</span><br>
            <br>
        </div>
        
        <p class="content-text">b. Inisialisasi array:</p>
        <div class="code-block"><br>
        <span class="type">int</span> nilai [<span class="type">5</span>] ] = {<span class="type">10</span>, <span class="type">20</span>, <span class="type">30</span>, <span class="type">20</span>, <span class="type">40</span>, <span class="type">50</span>};
            <span class="comment">// langsung mengisi nilai saat deklarasi</span><br>
            <br>
        </div>
        <br>

        <!-- SECTION 3 -->
        <h2 class="section-title">3. Mengakses Elemen Array</h2>
        <p class="content-text">Elemen array diakses dengan menggunakan indeks dalam tanda kurung siku []. Indeks dimulai dari 0.</p>

        <p class="content-text">Contoh:</p>
        <div class="code-block"><br>
            <p>cout << nilai [<span class="type">0</span>]; &nbsp; <span class="comment">// mengakses elemen pertama</span></p><br>
            <p>nilai [<span class="type">2</span>] = <span class="type">100</span>; &nbsp; <span class="comment">// mengubah elemen ketiga menjadi 100</span></p><br>
        </div>
        <br>

        <!-- SECTION 4 -->
        <h2 class="section-title">4. Mengisi dan Menampilkan Array dengan Loop</h2>
        <div class="code-block">
            
            <span class="keyword">#include</span> &lt;iostream&gt;<br>
            <span class="keyword">using namespace</span> std;
            <br><br>
            <span class="type">int</span> main() {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="type">int</span> nilai[<span class="type">5</span>];<br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// Input nilai array</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="type">for</span>(<span class="type">int</span> i = <span class="type">0</span>; i < <span class="type">5</span>; i++) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp; cout << <span class="type">"Masukkan nilai ke-"</span> << i+<span class="type">1</span> << ": ";<br>
            &nbsp;&nbsp;&nbsp;&nbsp; cin >> nilai[i];<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// Output nilai array</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;cout << <span class="type">"Isi array: "</span> ;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;  <span class="type">for</span>(  <span class="type">int</span> i =   <span class="type">0</span>; i <   <span class="type">5</span>; i++) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;cout << nilai[i] << <span class="type">" "</span>;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;}<br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="type">return</span> 0;<br>
            }
        </div>
        <br>

        <!-- SECTION 5 -->
        <h2 class="section-title">5. Array multidimensi</h2>
        <p class="content-text">Array bisa memiliki lebih dari satu dimensi (misal: matriks).</p>
        <div class="code-block"><br>
            <span class="type">int</span> matriks [<span class="type">2</span>][<span class="type">3</span>] = { <br>&nbsp;&nbsp;&nbsp;{<span class="type">1</span>, <span class="type">2</span>, <span class="type">3</span>}, <br> &nbsp;&nbsp;&nbsp;{<span class="type">4</span>, <span class="type">5</span>, <span class="type">6</span>} <br>}; <br> cout << matriks [<span class="type">1</span>][<span class="type">2</span>]; <span class="comment">// Output: 6</span>
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
        