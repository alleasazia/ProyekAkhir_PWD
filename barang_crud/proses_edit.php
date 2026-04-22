<?php
session_start();
include '../config/koneksi.php';

$id = $_POST['id'];
$kategori = $_POST['kategori'];
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($conn, "UPDATE barang SET 
    kategori='$kategori',
    nama_barang='$nama',
    jumlah='$jumlah',
    deskripsi='$deskripsi'
    WHERE id='$id'
");

header("Location: barang_saya.php");
exit();
?>