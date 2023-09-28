<?php 

// cek apakah tidak ada data di $_GET
// if( isset( $_GET["name"] ))     // apakah di variable SUPERGLOBALS sudah ada array dengan key "name"?
// apakah di variable SUPERGLOBALS belum ada array dengan key "name"?
    // redirect -> memindahkan user dari sebuah halaman ke halaman lain
// if( 
    // !isset( $_GET["name"] ) ||
    // !isset( $_GET["based"]) || 
    // !isset($_GET["package"]) || 
    // !isset($_GET["website"]) || 
    // !isset($_GET["picture"]) ){
    // header("Location: latihan1.1.php");
    // exit;
// }
 
// $_GET
$linux = [
    [
        "name" => "nixos",
        "based" => "independent",
        "package" => "nixpkgs",
        "website" => "https://nixos.org/",
        "picture" => "./nixos_logo.png",
    ],
    [
        "name" => "arch linux",
        "based" => "independent",
        "package" => "pacman",
        "website" => "https://archlinux.org",
        "picture" => "./archlinux.png",
    ],
    [
        "name" => "debian",
        "based" => "independent",
        "package" => "apt",
        "website" => "https://www.debian.org/",
        "picture" => "./debian.png",
    ], 
    [
        "name" => "gentoo",
        "based" => "independent",
        "package" => "portage",
        "website" => "https://www.gentoo.org/",
        "picture" => "./gentoo.png",
    ],
    [
        "name" => "void",
        "based" => "independent",
        "package" => "xbps",
        "website" => "https://voidlinux.org/",
        "picture" => "./voidlinux.png",
    ],
    [
        "name" => "slackware",
        "based" => "independent",
        "package" => "slackpkg",
        "website" => "http://www.slackware.com/",
        "picture" => "./slackware.png",
    ],
    [
        "name" => "alpine",
        "based" => "independent",
        "package" => "apk",
        "website" => "https://www.alpinelinux.org/",
        "picture" => "./alpine.png",
    ],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET </title>
    <style>
        .pict{
            width: 50px;
        }
    </style>
</head>
<body>
    <h1>Daftar Linux</h1>
    <ul>
    <?php foreach( $linux as $lnx ): ?>
        <li>
            <!-- setelah tanda tanya adalah kita menggunakan request GET dan mengirimkan data dari file disini (nama) ke latihan2.php -->
            <!-- terbukti ketika ketika sebelum mengklik link maka akan muncul nama dari tiap list -->

            <!-- nantinya cara seperti dibawah tidak akan sering digunakan karena url memiliki batas maksimal karakter -->
            <a href="latihan2.php?
            name=<?= $lnx["name"]; ?>
            &based=<?= $lnx["based"]; ?>
            &package=<?= $lnx["package"]; ?>
            &website=<?= $lnx["website"]; ?>
            &picture=<?= $lnx["picture"]; ?>
            "><?= $lnx["name"]; ?></a>
            <!-- <a href="latihan2.php"><?= $lnx["name"]; ?></a> -->
        </li>  
        <!-- pada array php name key picture tidak memberikan path masuk ke folder linux karena sudah dideklarasikan di baris html dibawah -->
        <!-- mengirimakn data gambar dengan static -->
        <!-- <li><img class="pict" src="./linux/<?= $lnx["picture"]; ?>" alt=""></li> -->
    <?php endforeach; ?>
    </ul>
    <!-- berikutnya men redirect / mengembalikan client ke website dia harus lewati ( seperti login ) -->
    <!-- lihat ke atas | isset di php -->
    
</body>
</html>
