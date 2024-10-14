<?php
// Memeriksa apakah parameter 'nama' tersedia di URL menggunakan $_GET
if (isset($_GET['nama'])) {
    // Mengambil nilai parameter 'nama' dari URL menggunakan $_REQUEST
    $nama = $_REQUEST['nama'];
    
    // Menampilkan nilai parameter 'nama'
    echo "Nama yang diambil dari URL adalah: " . htmlspecialchars($nama);
} else {
    // Menampilkan pesan jika parameter 'nama' tidak ada di URL
    echo "dumaa.";
}
?>