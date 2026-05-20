<?php
include '../config/koneksi.php';

$username = $_POST['username'];
$password_input = $_POST['password']; 

if (strlen($password_input) < 8) {
    header("Location: register.php?error=Password minimal harus 8 karakter!");
    exit();
}

$cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

if (mysqli_num_rows($cek_user) > 0) {
    header("Location: register.php?error=Username sudah digunakan!");
    exit();
} else {
    $password_fix = password_hash($password_input, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password_fix')");
    
    header("Location: login.php?pesan=berhasil");
}
?>