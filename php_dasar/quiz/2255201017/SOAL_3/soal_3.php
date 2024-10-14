<?php 
session_start();

$_SESSION['user'] = "admin";

echo $_SESSION['user'];

if(isset($_SESSION)){
    echo $_SESSION;
}