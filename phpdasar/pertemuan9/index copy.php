<?php 

$servername = "localhost";
$username = "4lend";
$password = "nix";
$dbname = "dataMotor";

$cnt = mysqli_connect( $servername, $username, $password, $dbname );

// memberikan kondisi untuk mengecek apakah database sudah terhubung atau belum, jika ter-connect akan apa dan jika tidak akan apa
// if( !$result ) {
    // echo mysqli_error($cnt);
// }
// 
// var_dump($result);

// jika hanya menggunakan mysqli_query tidak akan ada pesan error
// mysqli_query($cnt, "SELECT * FROM dataMotor")
// maka dari itu kita masukkkan ke dalam variable
// result adl perintah membawa lemari / sewadah2 nya dibawa tapi datanya tidak akan terlihat
// mysqli_query hanya menghitung / membawa data dari table motor, belum ada perintah untuk menampilkan
$result = mysqli_query($cnt, "SELECT * FROM motor");
// maka jika kita ingin mengambil data dari wadah $result, kita harus tuliskan kode baru
// terdapat 4 cara, yaitu :
// mysqli_fetch_row()       -> mengembalikan / memberikan array numeric | e.g. var_dump($mtr[4]);
// mysqli_fetch_assoc()     -> ini array associate / assosiatif | e.g. var_dump($mtr["Brand"]);
// mysqli_fetch_array()     -> fleksibel, bisa menggunakan numeric & associate, dengan kekurangan ketika mem'print' semua data maka masing2 data akan terprint 2 (array numeric & array associate)
// mysqli_fetch_object()    -> digunakan jika menggunaakn object (OOP)

// while, sebagai perulangan. agar selama masih ada data di $result maka program akan terus dijalankan
// while( $dm = mysqli_fetch_assoc($result) );
// var_dump($dm["name"]);

// return / mengembalikan adl bagaimana php sudah menghitung / menampung sebuah data (biasanya array) tapi belum ditampilkan

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect php dan database</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" class="href"> 
</head>
<body>

    <h1>Data Motor</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Model</th>
                <th>Brand</th>
            </tr>
        </thead>

        <?php $i = 1; ?>
        <?php while( $dt = mysqli_fetch_assoc($result) ) : ?>
        <tbody>
            <tr>
                <td><?= $i; ?></td>
                <th><?= $dt["name"]; ?></th>
                <th><?= $dt["type"]; ?></th>
                <th><?= $dt["model"]; ?></th>
                <th><?= $dt["brand"]; ?></th>
            </tr>
        </tbody>
        <?php $i++ ?>
        <?php endwhile; ?>
    </table>

</body>
</html>