<?php 
session_start();

$_SESSION['status'] = "aktif";

echo "session status diatur menjadi 'aktif" $_SESSION['status'];