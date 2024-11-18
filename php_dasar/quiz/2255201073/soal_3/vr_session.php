<?php
session_start();
$_SESSION['user'] = "admin";
if (isset($_SESSION['user'])) {
    echo "Variabel session 'user' diinisialisasi dengan nilai: " . $_SESSION['user'];
} else {
    echo "Variabel session 'user' belum diinisialisasi.";
}
?>