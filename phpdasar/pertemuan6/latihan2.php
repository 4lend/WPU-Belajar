<?php 
// $mahasiswa = [
    // ["al", "043324111", "al@gmail.com", "teknik informatika"],
    // ["budi", "043324121", "boedy@gmail.com", "teknik elektro"],
    // ["tyawan", "043324122", "tyaa@gmail.com", "teknik nuklir"],
// ];

// array associative 
// definisinya sama seperti array numerik, hanya saja key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "al", 
        "nrp" => "043324111", 
        "email" => "al@gmail.com", 
        "jurusan" => "teknik informatika",
        "gambar" => "photo1",
    ],
    [
        "nama" => "budi", 
        "nrp" => "043324121", 
        "email" => "boedy@gmail.com", 
        "jurusan" => "teknik elektro",
        "gambar" => "photo2",
    ],

    [
        "nama" => "tyawan", 
        "nrp" => "043324122", 
        "email" => "tyaa@gmail.com", 
        "jurusan" => "teknik nuklir",
        "tugas" => [90, 80, 100]
    ],
];
# foreach $mahasiswa[0]["nama"];
foreach( $mahasiswa as $mahas ): 
    ["nama"];
endforeach;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>

    <h1>daftar mahasiswa</h1>

    <ul>

        <!-- akan menampikan tulisan yang kita tulis didalam baris li -->
        <!-- <li>al</li> -->
        <!-- <li>043324111</li> -->
        <!-- <li>al@gmail.com</li> -->
        <!-- <li>teknik informatika</li> -->
        <!-- <br> -->
        <!-- akan menampilkan sama seperti diatas tetapi data diambil dari array yang ditulis di PHP -->
        <!-- dengan menggunakan array associative akan menyentting nama akan memprint nama, begitu juga dengan yang lainnya -->
        <!-- ini karena key sudah tidak by default menggunaakn angka, tapi kita memberikan key yang sesuai dengan yang kita butuhkan -->
        <!-- dan php tidak akan memperdulikan urutannya, dan hanya memperdulikan nama key nya apakah sesuai / tidak -->
        <?php foreach( $mahasiswa as $mhs): ?>
        <!-- <li><img src="./img/photo2.jpg" alt=""></li> -->
        <li>
            <img src="./img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"] ?></li>
        <li>NRP : <?= $mhs["nrp"] ?></li>
        <li>Email : <?= $mhs["email"] ?></li>
        <li>Jurusan : <?= $mhs["jurusan"] ?></li>
            <br>
        <?php endforeach; ?>

    </ul>
    
</body>
</html>