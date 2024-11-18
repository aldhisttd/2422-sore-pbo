<?php

/*
Soal 1: Variabel Biasa
Pertanyaan: Buat sebuah file PHP yang mendefinisikan variabel $nama dengan nilai "John Doe". Cek apakah variabel tersebut ada menggunakan isset(). Jika ada, cetak nilai variabel tersebut.
*/

$nama = "John Doe";

if (isset($nama)) {
   echo $nama;
}