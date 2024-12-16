<?php 
if (!isset($_POST['btn-submit'])) {
    header('location:../../index.php');
}

$kode = $_POST['kode'];
$nama = $_POST['nama'];

session_start();

if($nama == ''){
    $_SESSION['msg']['err_nama'] = "Data nama tidak boleh kosong";
}

if(isset($_SESSION['msg']['err_nama'])){
    header('location:../../?page=kategori-form-update&kode='.$kode);
    exit();
}

include('../../../assets/koneksi.php');

$query = "SELECT * FROM kategori WHERE nama='$nama' AND kode != 'kode'";
$q = mysqli_query($koneksi, $query);
if(mysqli_num_rows($q)!=0){
    $_SESSION['msg']['error'] = "Data kategori sudah ada, periksa kode atau nama yang sama";
    header('location:../../?page=kategori-form-update&kode='.$kode);
    exit();
}

$query = "UPDATE kategori SET nama='$nama' WHERE kode='$kode'";
mysqli_query($koneksi, $query);
$_SESSION['msg']['success'] = "Data kategori berhasil diupdate";
header('location:../../?page=kategori-data');


