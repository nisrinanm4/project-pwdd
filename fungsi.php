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
    <h1 class="tutorial-title">Fungsi</h1>

    <div class="tutorial-container">
        <!-- SECTION 1 -->
        <h2 class="section-title">1. Pengertian</h2>
        <p class="content-text justify">
   Fungsi adalah blok kode yang dirancang untuk melakukan tugas tertentu dan dapat dipanggil berulang kali dalam program. Fungsi membantu mengorganisir kode agar lebih modular, mudah dibaca, dan dapat digunakan kembali.</p>
        <br>
         <!-- SECTION 2 -->
        <h2 class="section-title">2. Struktur Dasar Fungsi</h2>
        <p class="content-text">Sebuah fungsi terdiri dari:</p>
        <p class="content-text">- <strong>Tipe pengembalian (return type)</strong>: tipe data yang dikembalikan fungsi (misal int, void, float, dll).</p>
        <p class="content-text">- <strong>Nama fungsi</strong>: identifier untuk memanggil fungsi.</p>
        <p class="content-text">- <strong>Parameter (opsional)</strong>: data yang diterima fungsi sebagai input.</p>
        <p class="content-text">- <strong>Badan fungsi (body)</strong>: kumpulan perintah yang dijalankan saat fungsi dipanggil.</p>
        
        <br>

        <!-- SECTION 3 -->
        <h2 class="section-title">3. Fungsi void</h2>
        <p class="content-text">Fungsi dengan tipe void tidak mengembalikan nilai.</p>
        <div class="code-block"><br>
            <span class="type">void</span> cetakPesan() {
                <br>&nbsp;&nbsp;&nbsp;cout << "Halo, ini fungsi void!" << endl;
            <br>}</p>
        </div>
        <br>

         <!-- SECTION 4 -->
        <h2 class="section-title">4. Cara Memanggil Fungsi</h2>
        <p class="content-text">Setelah fungsi didefinisikan, panggil dengan menyebutkan nama dan memberikan argumen sesuai parameter:</p>
        <div class="code-block"><br>
            <span class="type">int</span> hasil = tambah(<span class="type">5</span>, <span class="type">3</span>); 
        <br> cout << <span class="type">"hasil: "</span> << hasil << endl; // Output: Hasil: 8</p><br>
            <p>nilai [<span class="type">2</span>] = <span class="type">100</span>; &nbsp; // mengubah elemen ketiga menjadi 100</p>
            <br>
        </div>
        <br>

        <!-- SECTION 5 -->
        <h2 class="section-title">5. Fungsi dengan Parameter dan Argumen</h2>
        <p class="content-text">Array bisa memiliki lebih dari satu dimensi (misal: matriks).</p>
         <p class="content-text">- <strong>Parameter</strong> adalah variabel yang didefinisikan di fungsi.</p>
         <p class="content-text">- <strong>Argumen</strong> adalah nilai yang diberikan saat memanggil fungsi.</p>
         <div class="code-block"><br>
            <span class="type">void</span> sapa(string nama) {
         <br>&nbsp;&nbsp;&nbsp; cout << <span class="type">"Halo, "</span> << nama << <span class="type">"!"</span> << endl; <br> }</p><br>
            <p>sapa(<span class="type">"Andi"</span>); // Output: Halo, Andi!</p><br>
         </div>
         <br>

          <!-- SECTION 6 -->
          <h2 class="section-title">6. Fungsi Prototype</h2>
          <p class="content-text">Fungsi prototype adalah deklarasi fungsi sebelum definisi lengkapnya, berguna agar fungsi bisa dipanggil sebelum definisinya muncul dalam kode.</p>
          <div class="code-block"><br>
            <span class="type">int</span> kali(<span class="type">int</span>); // prototype<br><br>
            <span class="type">int</span> main() {
            <br>&nbsp;&nbsp;&nbsp;cout << kali(<span class="type">4</span>,<span class="type">5</span>); <br>&nbsp;&nbsp;&nbsp;<span class="type">return 0;</span> <br> }</p><br><br>
            <span class="type">int</span> kali(<span class="type">int</span> a, <span class="type">int</span> b) {
            <br>&nbsp;&nbsp;&nbsp;<span class="type">return</span> a * b; <br> }</p><br><br>
         </div>
         <br>

         <!-- SECTION 7 -->
          <h2 class="section-title">7. Fungsi Overloading</h2>
          <p class="content-text">C++ mendukung fungsi dengan nama sama tapi parameter berbeda, disebut fungsi overloading.</p>
          <div class="code-block"><br>
            <span class="type">int</span> tambah(<span class="type">int</span> a, <span class="type">int</span> b) {<br>
            &nbsp;&nbsp;&nbsp;<span class="type">return</span> a + b; <br> }
            <br><br><span class="type">double</span> tambah(</span><span class="type">double</span> a, <span class="type">double</span> b) {<br>
            &nbsp;&nbsp;&nbsp;<span class="type">return</span> a + b; <br> } 
         </div>
         <br>

         <!-- SECTION 8 -->
        <h2 class="section-title">8. Fungsi const dan constexpr</h2>
        <p class="content-text">- Fungsi const biasanya digunakan dalam kelas untuk menunjukkan fungsi tidak mengubah data anggota.</p>
        <p class="content-text">- Fungsi constexpr memungkinkan evaluasi fungsi saat kompilasi untuk optimasi.</p>
    </div>
         


    <!-- NAVIGATION BUTTONS -->
    <div class="nav-buttons">
        <a href="materi.php"><button class="nav-button">Kembali</button></a>
        <a href=""><button class="nav-button">Lanjut</button></a>
    </div>
</main>

</body>
</html>
        