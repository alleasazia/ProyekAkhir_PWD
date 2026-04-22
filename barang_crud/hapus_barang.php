<?php
echo "MASUK FILE HAPUS";
session_start();
include '../config/koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}

$id = $_GET['id'];
$user_id = $_SESSION['user_id'];

// hapus hanya milik sendiri
mysqli_query($conn, "DELETE FROM barang WHERE id='$id' AND user_id='$user_id'");

// redirect balik ke halaman barang saya
header("Location: ../barang_saya.php");
exit();
?>