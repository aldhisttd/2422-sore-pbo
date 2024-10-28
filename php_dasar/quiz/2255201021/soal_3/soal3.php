<?php 
 
session_start();

$_SESSION['user'] = "admin";

echo $_SESSION['user'];

?>