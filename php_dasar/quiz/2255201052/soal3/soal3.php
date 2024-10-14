<?php
// Memulai session
session_start();

// Inisialisasi variabel session
$_SESSION['user'] = "admin";

// Cek apakah variabel session 'user' sudah diinisialisasi
if (isset($_SESSION['user'])) {
    // Jika sudah diinisialisasi, cetak nilainya
    echo "User telah diinisialisasi: " . $_SESSION['user'];
} else {
    // Jika belum diinisialisasi
    echo "User belum diinisialisasi.";
}
?>