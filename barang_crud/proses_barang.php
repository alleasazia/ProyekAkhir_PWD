<?php
session_start();
include '../config/koneksi.php';

if (!isset($_SESSION['user_id'])) {
    die("Session user tidak ada!");
}

$kategori = $_POST['kategori'] ?? '';
$nama = $_POST['nama_barang'] ?? '';
$jumlah = $_POST['jumlah'] ?? '';
$deskripsi = $_POST['deskripsi'] ?? '';
$user_id = $_SESSION['user_id'];

// debug
if (!$kategori || !$nama) {
    die("Data tidak lengkap");
}

$query = mysqli_query($conn, "INSERT INTO barang 
(kategori, nama_barang, jumlah, deskripsi, user_id) 
VALUES ('$kategori', '$nama', '$jumlah', '$deskripsi', '$user_id')");

if (!$query) {
    die("Query error: " . mysqli_error($conn));
}

header("Location: ../barang_saya.php");
exit;
?>