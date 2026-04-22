<?php
session_start();
include '../config/koneksi.php';

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = $_POST['password'];

// ambil data user
$data = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
$user = mysqli_fetch_assoc($data);

if ($user) {

    if (password_verify($password, $user['password'])) {

        // ✅ SIMPAN ID USER
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // remember me
        if (isset($_POST['remember'])) {
            setcookie("username", $user['username'], time() + (60 * 60 * 24), "/");
        } else {
            setcookie("username", "", time() - 3600, "/");
        }

        header("Location: ../form.php");
        exit();

    } else {
        echo "Password salah!";
    }

} else {
    echo "User tidak ditemukan!";
}
?>