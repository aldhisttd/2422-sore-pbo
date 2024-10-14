<?php
// http://localhost/tes.php?nama=Fulan
if (isset($_REQUEST['nama'])) {
    $nama = $_REQUEST['nama'];
    echo "Nama: " . $nama;
} else {
}
?>
