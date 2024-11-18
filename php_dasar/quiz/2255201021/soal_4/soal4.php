<?php 
 
session_start();

$_SESSION['status'] = "aktif";

echo $_SESSION['status'];

?>