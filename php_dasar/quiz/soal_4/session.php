<?php

session_start();

$_SESSION['status'] = 'aktif';

if (isset($_SESSION['status'])) {
    echo $_SESSION['status'];

}
?>
