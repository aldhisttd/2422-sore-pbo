<?php 

if(!isset($_POST['btn-login'])){
    header('location:../form.php');
    exit();
}
// proses login
// ============
// ambil username dan password yg diinput
$user_form = $_POST['username'];
$pass_form = $_POST['password'];
// validasi kosong atau tidak
session_start();
if($user_form==''){
    $_SESSION['msg-user'] = "Username tidak boleh kosong.";
}
if($pass_form==''){
    $_SESSION['msg-pass'] = "Password tidak boleh kosong.";
}

if(isset($_SESSION['msg-user']) || isset($_SESSION['msg-pass'])){
    header('location:../form.php');
    exit();
}

// cek benar / salah
if($user_form!="admin" || $pass_form !="123"){
    $_SESSION['msg-global'] = "Data login tidak valid.";
    header('location:../form.php');
    exit();
}

// login
$_SESSION['login'] = true;
header('location:beranda.php');



?>