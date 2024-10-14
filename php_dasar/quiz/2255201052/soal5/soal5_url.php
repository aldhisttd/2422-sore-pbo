<?php
// Memeriksa apakah parameter 'nama' tersedia di URL menggunakan $_REQUEST
if (isset($_REQUEST['nama'])) {
    // Mengambil nilai parameter 'nama' menggunakan $_REQUEST
    $nama = $_REQUEST['nama'];
    
    // Menampilkan nilai dari parameter 'nama'
    echo "Nama yang diambil dari URL: " . $nama;
} else {
    // Jika parameter 'nama' tidak ditemukan di URL
    echo "Parameter 'nama' tidak ditemukan di URL.";
}
?>