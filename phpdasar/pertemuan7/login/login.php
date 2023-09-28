<?php 

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ){
    // cek username dan password
    if( $_POST["username"] == "admin" && $_POST["password"] == "123" ){
    // jika benar, redirect ke halaman admin.php
    header("Location: admin.php");
    exit;
    } else {
    // jika salah, tampilkan pesan kesalahan
        $error = true;
    } 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h1>Login Admin</h1>

<?php if(isset($error) ): ?>
    <p style="color: red; font-style: italic;">username / password salah!</p>
<?php endif; ?>

<ul>

<form action="" method="post">
    <li>
        <!-- "key" antara label dan input saling berhubungan / cara memberitahu HTML bahwa keduanya saling terhubung -->
        <!-- fungsinya agar cukup dengan mengklik Username(label) keyboard auto input ke kolom input username -->
        <label for="key">Username : </label>
        <input type="text" name="username" id="key">
    </li>
    <li>
        <label for="key">Password : </label>
        <input type="password" name="password" id="key">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>

</form>

</ul>
</body>
</html>