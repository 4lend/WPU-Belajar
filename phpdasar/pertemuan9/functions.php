<?php 
// require './index.php';

$servername = "localhost";
$username = "4lend";
$password = "nix";
$dbname = "dataMotor";

$cnt = mysqli_connect( $servername, $username, $password, $dbname );

// cara show data dari database
// $variable = mysqli_query ($variableKoneksi, $variableQueryYgAkanDigunakan);

function query($query){
    global $cnt;
    $result = mysqli_query($cnt, $query);
    // rows adl wadah kosong untuk menampung data yg ingin ditampilkan
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        // data yang telah didapatkan pada variable row akan ditampung / dimasukkan ke variable $rows
        $rows[] = $row;
    }
    // data yg ada divariable $rows disimpan / direturn (belum ditampilkan)
    return $rows;
}

?>