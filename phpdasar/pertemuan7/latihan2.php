<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Linux</title>
    <style>
        .pict{
            width: 100px;
        }
    </style>
</head>
<body>

<!-- jika kita tulis seperti dibawah, maka dari list di latihan1.1.php kita mau klik manapun tidak akan muncul detail dari masing2 list dan hanya keluar detail dari alpine linux -->
<ul>
    <!-- disini kita menangkap data yang telah dikirimkan oleh file latihan1.1.php -->
    <li><img class="pict" src="./linux/<?= $_GET["picture"]; ?>" alt=""></li>
    <!-- ini adalah contoh mengambil data yang hasil kiriman file latihan1.1.php -->
    <!-- mengambil data array dengan key name -->
    <!-- ["name"] akan menyesuaikan nama yg kita kirimkan -->
    <li><?= $_GET["name"]; ?></li>
    <li>independent</li>
    <li><?= $_GET["package"]; ?></li>
    <li><?= $_GET["website"]; ?></li>
</ul>

<a href="latihan1.1.php">kembali ke daftar linux</a>
    
</body>
</html>