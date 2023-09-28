<?php 

// SUPERGLOBALS 
// variable global milik PHP
// merupaka array assosiatif

// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];
// echo PHP_EOL;

// kita akan belajar mengenai variable SUPERGLOBALS
// kali ini tentang $_GET & $_POST

// $_GET
$_GET["nama"] = "4lend";
$_GET["nrp"] = "043324111";
var_dump($_GET);
// echo $_GET["nama"];

// selain itu dengan menggunakan metode $_GET kita bisa menambahkan data dengan cara menulisnya dialamat url
// contoh seperti dibawah
http://localhost/WPU/phpdasar/pertemuan7/latihan1.php
http://localhost/WPU/phpdasar/pertemuan7/latihan1.php?nama=alfurqani&nrp=043324111
// ? -> saya ingin mengirimkan data ke alamat url tersebut dengan menggunakan metode request GET
// dan setelah ? adalah data / nilay yang akan dikirimkan
//
// kemudian tanda & jika ada data lebih yang ingin kita kirim ke alamat url
// tentu saja ini akan masuk ke variable array yang berikutnya ( masuk index 1 ), yang index 0 sudah digunakan oleh nama

?>