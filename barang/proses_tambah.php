<?php
session_start();
include '../config/koneksi.php';

$nama = $_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];
$user = $_SESSION['username'];

// ambil id user
$data = mysqli_query($conn, "SELECT id FROM user WHERE username='$user'");
$u = mysqli_fetch_assoc($data);
$user_id = $u['id'];

mysqli_query($conn, "INSERT INTO barang VALUES('', '$nama', '$deskripsi', '$user_id')");

header("Location: ../index.php");
?>