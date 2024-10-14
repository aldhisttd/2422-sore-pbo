<?php 
session_start();



if(isset($_SESSION['status'])){
    echo $_SESSION['status'];
}

?>