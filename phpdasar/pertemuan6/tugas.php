<?php 

$linux = [
    [
        "name" => "nixos",
        "based" => "independent",
        "package" => "nixpkgs",
        "website" => "https://nixos.org/",
        "picture" => "./linux/nixos_logo.png",
    ],
    [
        "name" => "arch linux",
        "based" => "independent",
        "package" => "pacman",
        "website" => "https://archlinux.org",
        "picture" => "",
    ],
    [
        "name" => "debian",
        "based" => "independent",
        "package" => "apt",
        "website" => "https://www.debian.org/",
        "picture" => "",
    ], 
    [
        "name" => "gentoo",
        "based" => "independent",
        "package" => "portage",
        "website" => "https://www.gentoo.org/",
        "picture" => "",
    ],
    [
        "name" => "void",
        "based" => "independent",
        "package" => "xbps",
        "website" => "https://voidlinux.org/",
        "picture" => "",
    ],
    [
        "name" => "slackware",
        "based" => "independent",
        "package" => "slackpkg",
        "website" => "http://www.slackware.com/",
        "picture" => "",
    ],
    [
        "name" => "alpine",
        "based" => "independent",
        "package" => "apk",
        "website" => "https://www.alpinelinux.org/",
        "picture" => "",
    ],
]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linux</title>
</head>
<body>
    <h1>Linux List</h1>
    <?php foreach( $linux as $lnx): ?>
        <ul>
            <!-- <li> <img src="linux/<?= $lns[0]["picture"]; ?> ></li> -->
            <li><img src="linux/nixos_logo.png" alt=""></li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>