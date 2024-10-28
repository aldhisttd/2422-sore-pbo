<?php
// Memulai session
session_start();

// Mengatur variabel session
$_SESSION['status'] = "aktif";

// Pesan konfirmasi
echo "Session 'status' telah diatur menjadi: " . $_SESSION['status'];
?>