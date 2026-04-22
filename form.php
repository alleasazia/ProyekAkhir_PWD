<?php
session_start();
include './config/koneksi.php';

// Samakan pengecekannya dengan file proses, yaitu menggunakan id_user
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang - ShareGoods</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-section {
            margin-top: 80px;
            margin-bottom: 80px;
        }

        .card-form {
            border-radius: 20px;
        }
    </style>
</head>

<body>

<div class="main-wrapper">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid nav-container">
            <a class="logo text-decoration-none" href="../index.php">ShareGoods</a>

            <div class="collapse navbar-collapse justify-content-center">
                <div class="menu">
                    <a href="../index.php">Home</a>
                    <a href="../AboutMe.php">Tentang</a>
                    <a href="../kontak.php">Kontak</a>
                </div>
            </div>

            <div class="nav-right">
                <span class="me-3">Hi, <?php echo $_SESSION['username']; ?></span>
                <a href="./auth/logout.php" class="btn-custom">Logout</a>
            </div>
        </div>
    </nav>

    <!-- FORM -->
    <div class="container form-section">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow border-0 p-4 p-md-5 card-form">

                    <h2 class="text-center fw-bold mb-4">Tambah Barang</h2>

                    <form action="./barang_crud/proses_barang.php" method="POST">

                        <div class="mb-3">
                            <label class="fw-semibold">Kategori Barang</label>
                            <select name="kategori" class="form-control" required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Pakaian">Pakaian</option>
                                <option value="Perabot">Perabot</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="fw-semibold">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="fw-semibold">Jumlah Barang</label>
                            <input type="number" name="jumlah" class="form-control" required>
                        </div>

                        <div class="mb-4">
                            <label class="fw-semibold">Deskripsi Barang</label>
                            <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
                        </div>

                        <button type="submit" class="btn-custom w-100 py-2">
                            Simpan Barang
                        </button>

                    </form>

                </div>

            </div>
        </div>
    </div>

</div>

</body>
</html>