<?php
session_start();

$_SESSION['user'] = "adnmin";

echo $_SESSION['user'];


if(isset($_SESSION)){
    echo $_SESSION;
}


?>