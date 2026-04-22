<?php
include '../config/koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM barang WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>

<h2>Edit Barang</h2>

<form action="proses_edit.php" method="POST">
    
    <!-- ID disembunyikan -->
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <label>Nama Barang</label><br>
    <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>"><br><br>

    <label>Deskripsi</label><br>
    <textarea name="deskripsi"><?php echo $row['deskripsi']; ?></textarea><br><br>

    <button type="submit">Update</button>
</form>