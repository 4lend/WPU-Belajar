<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<!-- akan membuka file ini setelah mengisi form di file latihan3.php -->
<!-- data dari form file latihan3.php sudah dikirimkan kesini tetapi belum kita gunakan -->
<h1>selamat datang admin</h1>

<h1>Selamat Datang, <?= $_POST["key"] ?>!</h1>

</body>
</html>