<?php

/*
Soal 5: Penggunaan $_GET dan $_REQUEST untuk Mengambil Data dari URL
Pertanyaan:
Buat sebuah script PHP di mana Anda mengambil data dari URL menggunakan $_GET. Tambahkan parameter nama di URL, misalnya localhost/tes.php?nama=Fulan. Tampilkan nilai dari parameter nama menggunakan $_REQUEST.
*/

$nama = $_REQUEST["nama"];

echo $nama;
// http://localhost/2422-sore-pbo/php_dasar/quiz/2255201039/soal_5/index.php?nama=fulan