<?php 
session_start();
if(!isset($_SESSION['login'])){
    header('location:form_post.php');
    exit();
}
?>

Halo selamat datang !

<br>

<a href="logout.php">Logout</a>