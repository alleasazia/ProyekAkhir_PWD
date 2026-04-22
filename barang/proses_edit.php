<?php
include '../config/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($conn, "UPDATE barang SET 
    nama_barang='$nama',
    deskripsi='$deskripsi'
    WHERE id='$id'
");

header("Location: ../index.php");
?>