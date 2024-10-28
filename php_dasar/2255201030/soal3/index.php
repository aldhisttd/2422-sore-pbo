<?php 
session_start();

$_SESSION['user'] = 'admin';

if (isset($_SESSION[$'user'])) {

    echo "variabel session 'user' sudah diinisiasi dengan nilai :" . $_SESSION[user] ;   
    }

    ?>