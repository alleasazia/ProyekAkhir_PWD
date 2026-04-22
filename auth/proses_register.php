<?php
include '../config/koneksi.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

header("Location: login.php");
?>