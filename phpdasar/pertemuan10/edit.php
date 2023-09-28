<?php
require './functions.php';

// Cek apakah ID telah diteruskan melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data item yang akan diubah dari database
    $itemToEdit = query("SELECT * FROM motor WHERE id = $id")[0];

    if (!$itemToEdit) {
        // Tampilkan pesan jika item tidak ditemukan
        echo 'Item tidak ditemukan.';
        exit();
    }

    // Proses form pengeditan akan ditempatkan di sini
} else {
    // Tampilkan pesan jika ID tidak ditemukan
    echo 'ID tidak ditemukan.';
}
?>
