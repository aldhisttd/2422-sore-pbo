<?php

/*
Soal 4: Variabel Session - Menggunakan di Halaman Lain
Pertanyaan: Buat dua file PHP. Di file pertama, atur variabel session $_SESSION['status'] dengan nilai "aktif". Di file kedua, gunakan isset() untuk memeriksa apakah variabel session $_SESSION['status'] tersedia, jika ada cetak nilainya.
*/

session_start();

$_SESSION['status'] = "aktif";