<?php
session_start();
include '../config/koneksi.php';

$kategori   = $_POST['kategori'];
$nama       = $_POST['nama_barang'];
$jumlah     = $_POST['jumlah'];
$deskripsi  = $_POST['deskripsi'];
$user_id    = $_SESSION['user_id'];

$nama_gambar = $_FILES['gambar']['name'];
$tmp_gambar  = $_FILES['gambar']['tmp_name'];

$gambar_baru = time() . "_" . $nama_gambar;

$tujuan = "../uploads/" . $gambar_baru;

if (move_uploaded_file($tmp_gambar, $tujuan)) {
    $query = "INSERT INTO barang (kategori, nama_barang, jumlah, deskripsi, user_id, gambar) 
              VALUES ('$kategori', '$nama', '$jumlah', '$deskripsi', '$user_id', '$gambar_baru')";
    
    if (mysqli_query($conn, $query)) {
        header("Location: ../alamat.php");
    } else {
        echo "Gagal simpan ke database!";
    }
} else {
    echo "Gagal upload! Cek lagi folder 'uploads' kamu sudah ada belum di luar folder barang?";
}
?>