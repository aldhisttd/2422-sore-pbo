<?php
// Memulai session
session_start();

// Cek apakah variabel session 'status' tersedia
if (isset($_SESSION['status'])) {
    // Cetak nilai session jika tersedia
    echo "Status saat ini: " . $_SESSION['status'];
} else {
    // Pesan jika session tidak ada
    echo "Session 'status' tidak ditemukan.";
}
?>