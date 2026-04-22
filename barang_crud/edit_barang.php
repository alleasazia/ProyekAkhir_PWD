<?php
session_start();
include '../config/koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$id_user = $_SESSION['user_id'];

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM barang WHERE id='$id' AND user_id='$id_user'");
$barang = mysqli_fetch_assoc($data);

if (!$barang) {
    echo "Data tidak ditemukan!";
    exit;
}

include'../tampilan_edit.php';
?>
