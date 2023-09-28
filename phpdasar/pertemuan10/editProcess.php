<?php
require './functions.php';

// Cek apakah data dikirimkan melalui formulir
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $newName = $_POST['name'];
    $newType = $_POST['type'];
    // Tambahkan input untuk kolom lain yang ingin diubah

    // Buat query UPDATE SQL untuk mengubah data di dalam tabel
    $query = "UPDATE motor SET
                name = '$newName',
                type = '$newType'
              WHERE id = $id";

    // Eksekusi query UPDATE
    if (mysqli_query($cnt, $query)) {
        echo 'Data berhasil diubah.';
    } else {
        echo 'Data gagal diubah: ' . mysqli_error($cnt);
    }
} else {
    // Tampilkan pesan jika data tidak dikirimkan
    echo 'Data tidak dikirimkan.';
}
?>


<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Panggil fungsi update dengan data yang dikirimkan dari formulir
    if (update($_POST)) {
        echo "
            <script>
                alert('Data berhasil diperbarui');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diperbarui');
            </script>
        ";
    }
}


?>