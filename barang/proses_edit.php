<?php
include '../config/koneksi.php';

$id        = $_POST['id'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($conn, "UPDATE barang SET 
    deskripsi = '$deskripsi' 
    WHERE id = '$id'"
);

header("Location: ../barangsaya.php");
?>