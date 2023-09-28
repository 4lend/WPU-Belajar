<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<!-- action adl kemana kita akan mengirimkan data yang kita tulisan didalam form -->
<!-- pd kasus ini setelah mengklik tombol Send! kita akan mengirimkan form input name ke file latihan4.php -->
<!-- pada form dibawah jika tidak ada action & method maka default valuenya adl action="halamanIniSendiri" method="get" -->

<!-- digunakan utk cek terlebih dahulu & jika tidak ada maka akan ditampilkan secara bersamaan -->
<?php if( isset($_POST["submit"])): ?>
    <h1>Halo, Selamat Datang <?= $_POST["key"]; ?></h1>
<?php endif; ?>
<form action="" method="post">
    <!-- membuat forum yang bisa diisi -->
    input name : 
    <input type="text" name="key">
    <br>
    <!-- membuat tombol kirim -->
    <button type="submit" name="submit">Send!</button>
</form>

<!-- NOTE -->
<!-- 
    perbedaan antara GET & POST adl
    GET -> input / data yang dimasukkan / dikirimkan akan terlihat di alamat url
    POST -> input / data yang dimasukkan / dikirimkan tidak akan terlihat di alamat url
    sehingga POST biasa digunakan ketika membuat web page login / yang sifatnya privasi
 -->

</body>
</html>