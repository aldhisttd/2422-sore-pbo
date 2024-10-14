<?php 
session_start();

$_SESSION["user"] = "admin";

if (isset($_SESSION["user"])) {
   
    echo $_SESSION["user"];


}

