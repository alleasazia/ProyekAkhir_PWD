<?php
session_start();
include '../config/koneksi.php';

if (!isset($_POST['username']) || !isset($_POST['password'])) {
    header("Location: login.php");
    exit();
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username'";
$data = mysqli_query($conn, $query);

if (!$data) {
    die("Query error: " . mysqli_error($conn));
}

if (mysqli_num_rows($data) > 0) {
    $user = mysqli_fetch_assoc($data);

    if (password_verify($password, $user['password'])) {
        
        session_regenerate_id(true);

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        if (isset($_POST['remember'])) {
            setcookie("username", $user['username'], time() + (60 * 60 * 24), "/");
        } else {
            setcookie("username", "", time() - 3600, "/");
        }

        header("Location: ../dashboard.php");
        exit();

    } else {
        header("Location: login.php?error=Username atau Password salah");
        exit();
    }
} else {
    header("Location: login.php?error=Username atau Password salah");
    exit();
}
?>