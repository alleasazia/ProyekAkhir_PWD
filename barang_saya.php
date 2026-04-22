<?php
session_start();
include './config/koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = (int) $_SESSION['user_id'];

// search & filter
$search = $_GET['search'] ?? '';
$kategori = $_GET['kategori'] ?? '';

$query = "SELECT * FROM barang WHERE user_id='$user_id'";

if ($search != '') {
    $query .= " AND nama_barang LIKE '%$search%'";
}

if ($kategori != '') {
    $query .= " AND kategori='$kategori'";
}

$query .= " ORDER BY id DESC";

$result = mysqli_query($conn, $query);

// function gambar
function getGambar($data) {
    if (!empty($data['gambar'])) {
        return "./uploads/" . $data['gambar'];
    }

    switch(strtolower($data['kategori'])) {
        case 'elektronik': return './assets/pohon.jpg';
        case 'pakaian': return './assets/jeje.jpg';
        case 'buku': return './assets/jeni.jpg';
        case 'makanan': return './assets/wonu.jpg';
        default: return './assets/donasi.jpeg';
    }
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Barang Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">

    <style>
        body {
            background: #f5f7f6;
        }

        .card-barang {
            border-radius: 16px;
            transition: 0.3s;
        }

        .card-barang:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .badge-kategori {
            background-color: #198754;
            color: white;
            font-size: 12px;
            padding: 5px 10px;
            border-radius: 20px;
        }

        .btn-custom {
            border-radius: 20px;
            font-size: 14px;
        }

        .container-custom {
            margin-top: 100px;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>

<div class="main-wrapper d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid nav-container">
            <a class="logo text-decoration-none" href="index.php">ShareGoods</a>

            <div class="collapse navbar-collapse justify-content-center">
                <div class="menu">
                    <a href="index.php">Home</a>
                    <a href="AboutMe.php">Tentang</a>
                    <a href="kontak.php">Kontak</a>
                </div>
            </div>

            <div class="nav-right">
                <span class="me-3">Hi, <?php echo $_SESSION['username']; ?></span>
                <a href="./auth/logout.php" class="btn-custom">Logout</a>
            </div>
        </div>
    </nav>
<div class="container py-4">

    <!-- HEADER -->
    <div class="position-relative mb-4">

    <h3 class="fw-bold text-center">Barang Saya</h3>

    <a href="form.php" 
       class="btn btn-success position-absolute end-0 top-50 translate-middle-y">
       + Tambah Barang
    </a>

</div>

    <!-- SEARCH -->
    <form method="GET" class="row g-2 mb-4 justify-content-center">
        <div class="col-md-4">
            <input type="text" name="search" class="form-control" 
                   placeholder="Cari barang..." value="<?= $search ?>">
        </div>

        <div class="col-md-3">
            <select name="kategori" class="form-control">
                <option value="">Semua Kategori</option>
                <option <?= $kategori=='Elektronik'?'selected':'' ?>>Elektronik</option>
                <option <?= $kategori=='Pakaian'?'selected':'' ?>>Pakaian</option>
                <option <?= $kategori=='Buku'?'selected':'' ?>>Buku</option>
                <option <?= $kategori=='Makanan'?'selected':'' ?>>Makanan</option>
            </select>
        </div>

        <div class="col-md-2">
            <button class="btn btn-success w-100">Cari</button>
        </div>
    </form>

    <!-- GRID -->
    <div class="row g-4">

        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($data = mysqli_fetch_assoc($result)): ?>

                <div class="col-md-3 mb-4">
                    <div class="card product-card h-100">
                        <div class="product-img">
                            <img src="<?= getGambar($data); ?>" style="width:100%; height:200px; object-fit:cover;">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <!-- GAMBAR -->

                            <!-- NAMA -->
                            <h6 class="product-title">
                                <?= htmlspecialchars($data['nama_barang']); ?>
                            </h6>

                            <!-- KATEGORI -->
                            <span class="badge bg-light text-dark mb-1">
                                <?= $data['kategori']; ?>
                            </span>

                            <!-- STOK -->
                            <span class="stok-text mb-2">
                                Stok: <?= $data['jumlah']; ?>
                            </span>

                            <!-- DESKRIPSI -->
                            <p class="desc-text flex-grow-1">
                                <?= htmlspecialchars(substr($data['deskripsi'], 0, 60)); ?>...
                            </p>

                            <!-- BUTTON -->
                            <div class="d-flex gap-2 mt-2">
                                <a href="barang_crud/edit_barang.php?id=<?= $data['id']; ?>" 
                                   class="btn btn-outline-success btn-sm w-50">Edit</a>

                                <a href="barang_crud/hapus_barang.php?id=<?= $data['id']; ?>" 
                                   class="btn btn-outline-danger btn-sm w-50"
                                   onclick="return confirm('Hapus barang ini?')">
                                   Hapus
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php else: ?>

            <div class="text-center py-5">
                <h5>Belum ada barang</h5>
                <p class="text-muted">Coba tambah atau cari dengan keyword lain</p>
            </div>

        <?php endif; ?>

    </div>
</div>
</div>

</body>
</html>