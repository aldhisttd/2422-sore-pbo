<?php

/*
Soal 3: Variabel Session - Inisialisasi dan Cek
Pertanyaan: Buat script PHP yang memulai session dan set variabel session bernama $_SESSION['user'] dengan nilai "admin". Gunakan isset() untuk memeriksa apakah variabel session tersebut sudah diinisialisasi, kemudian cetak nilainya.
*/

session_start();

$_SESSION["user"] = "admin";

if (isset($_SESSION["user"])) {
   echo $_SESSION["user"];
}