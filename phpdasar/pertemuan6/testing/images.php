<?php 

$images = [
    "alpine.png",
    "archlinux.png",
    "debian.png",
    "gentoo.png",
    "nixos_logo.png",
    "slackware.png",
    "voidlinux.png",
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Images</title>
</head>
<body>

    <h1>Linux Logo</h1>
    <?php foreach( $images as $image ): ?>
        <img src="<?php echo $image; ?>" alt="Image">
    <?php endforeach; ?>

</body>
</html>