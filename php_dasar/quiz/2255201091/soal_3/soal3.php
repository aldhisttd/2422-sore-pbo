<?php
session_start();

$_SESSION['user'] = "adnmin";

if(isset($_SESSION)){
    echo $_SESSION['user'];
}


?>