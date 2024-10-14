<?php 
session_start();

if (isset($_SESSION[$'status'])) {
}else{

    echo "session 'status' tidak ditemukan." ;   
    }
