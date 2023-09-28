<?php

// ini adalah komentar
# ini juga komentar

// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// standar output
// echo / print
// print_r
// var_dump

echo "hello". PHP_EOL;
print "hello". PHP_EOL;
print_r("hello".PHP_EOL);
var_dump("hello". PHP_EOL);

echo 123;
echo true;
echo false;

// penulisan sintaks PHP
// 1. PHP didalam HTML
// 2. HTML didalam PHP

// variable dan tipe data
// variable -> tidak boleh diawali dengan angka, tapi boleh dengan mengandung angka
$nama = "al";

// operator
// aritmatika -> +, -, *, /, %
// penggabung string / concatenation / concat -> .
// assignment -> =, +=, -=, /=, *=, %=, .=
// perbandingan -> <, >, <=, >=, ==
// identitas
// logika

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

    <!-- code php didalam html -->
    <h1>Halo, Selamat Datang <?php echo "al"; ?> </h1>
    <p><?php echo "ini adalah paragraf"; ?></p>   

    <!-- code html didalam php -->
    <?php 
        echo "<h1>halo, sugeng rawuh al</h1>"
    ?>
    <!-- tapi penulisan kode HTML di PHP tidak disarankan -->
    <!-- dan lebih baik menggunakan cara yang pertama (menulis kode PHP didalam HTML) -->

    <!-- menggunakan variable dari PHP -->
    <p>####################</p>
    <h1>halo, sugeng rawuh <?php $nama ?></h1>
    
</body>
</html>