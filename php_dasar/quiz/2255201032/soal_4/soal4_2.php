<?php 
session_start();
echo $_SESSION['status'];


if (isset($_SESSION['status'])) {
    echo $_SESSION['status'];
}

?>