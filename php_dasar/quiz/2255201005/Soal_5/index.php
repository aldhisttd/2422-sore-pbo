<?php
// http://localhost/2255201005/Soal_5/index.php?nama=Fulan
if (isset($_REQUEST['nama'])) {
    $nama = $_REQUEST['nama'];
    echo "Nama: " . $nama;
} else {
}
?>
