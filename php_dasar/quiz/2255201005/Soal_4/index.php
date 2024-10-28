<?php
session_start();
$_SESSION['status'] = "aktif";
echo "Session status diatur menjadi 'aktif'. <a href='check_session.php'>Cek session</a>";
?>
