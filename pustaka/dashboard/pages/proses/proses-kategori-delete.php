<?php 

$kode = $_REQUEST['kode'];

include('../../../assets/koneksi.php');

$query = "DELETE FROM kategori WHERE kode='$kode'";
mysqli_query($koneksi, $query);
session_start();
$_SESSION['msg']['success'] = "Data kategori ".$kode." berhasil dihapus";
header('location:../../?page=kategori-data');