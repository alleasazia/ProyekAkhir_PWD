<?php
session_start();
include './config/koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}

$user_id = (int) $_SESSION['user_id'];

$search = $_GET['search'] ?? '';
$kategori = $_GET['kategori'] ?? '';

$query = "SELECT * FROM barang WHERE user_id='$user_id'";

if ($search != '') {
    $search = mysqli_real_escape_string($conn, $search);
    $query .= " AND nama_barang LIKE '%$search%'";
}

if ($kategori != '') {
    $kategori = mysqli_real_escape_string($conn, $kategori);
    $query .= " AND kategori='$kategori'";
}

$query .= " ORDER BY id DESC";
$result = mysqli_query($conn, $query);

function getImg($data)
{
    $folder_uploads = "./uploads/";
    if (!empty($data['gambar'])) {
        $path_file_asli = $folder_uploads . $data['gambar'];
        if (file_exists($path_file_asli)) {
            return $path_file_asli;
        }
    }

    $kat = strtolower($data['kategori']);
    switch ($kat) {
        case 'pakaian':
            return './assets/pohon.jpg';
        case 'peralatan rumah':
            return './assets/jeje.jpg';
        case 'buku & alat tulis':
            return './assets/jeni.jpg';
        case 'elektronik':
            return './assets/wonu.jpg';
        default:
            return './assets/donasi.jpeg';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShareGoods - Barang Saya</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="assets/style.css">

    <style>
        .hero {
            background:
                linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
                url("./assets/pohon2.jpg") center/cover no-repeat;
            height: 450px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
            color: white;
            margin-bottom: 30px;
        }

        .hero-overlay h1 {
            font-weight: 700;
            letter-spacing: 1px;
            font-size: 3rem;
            margin-bottom: 10px;
            margin-top: 50px;
        }

        @media (max-width: 768px) {
            .navbar-floating {
                width: 95%;
                padding: 10px 20px;
            }

            .hero-overlay h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar-floating">
        <a href="index.php" class="brand">ShareGoods</a>

        <div class="nav-right d-flex align-items-center gap-3">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none gap-2 dropdown-toggle no-caret" data-bs-toggle="dropdown">
                    <span class="small d-none d-md-inline" style="color: var(--primary-green)">
                        Halo, <b><?= $_SESSION['username']; ?></b>
                    </span>
                    <div class="rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 35px; height: 35px; background-color: var(--primary-green); color: white;">
                        <i class="bi bi-person-fill"></i>
                    </div>
                </a>

                <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-3 p-2" style="border-radius: 15px; min-width: 180px;">
                    <li>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="dashboard.php">
                            <i class="bi bi-box-seam"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="form.php">
                            <i class="bi bi-plus-circle"></i> Tambah Barang
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider opacity-50">
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2 text-danger" href="logout.php">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-overlay">
            <h1>Berbagi Barang Layak Pakai</h1>
            <p class="fs-5 fw-light">Menghubungkan kebaikan melalui tangan-tangan peduli</p>
        </div>
    </section>

    <div class="container py-4">
        <div class="text-center mb-4">
            <h2 class="shop-title" style="margin-bottom: 2rem;">Barang Saya</h2>
            <p class="text-muted fw-light" style="letter-spacing: 2px;">Kelola dan pantau barang yang telah kamu bagikan</p>
        </div>

        <form action="" method="GET" class="search-box mb-4">
            <div class="row g-2">
                <div class="col-md-5">
                    <input type="text" name="search" class="form-control" placeholder="Cari barang..." value="<?= htmlspecialchars($search) ?>">
                </div>
                <div class="col-md-4">
                    <select name="kategori" class="form-select">
                        <option value="">Semua Kategori</option>
                        <option value="Pakaian" <?= $kategori == 'Pakaian' ? 'selected' : '' ?>>Pakaian</option>
                        <option value="Peralatan Rumah" <?= $kategori == 'Peralatan Rumah' ? 'selected' : '' ?>>Peralatan Rumah</option>
                        <option value="Buku & Alat Tulis" <?= $kategori == 'Buku & Alat Tulis' ? 'selected' : '' ?>>Buku & Alat Tulis</option>
                        <option value="Elektronik" <?= $kategori == 'Elektronik' ? 'selected' : '' ?>>Elektronik</option>
                    </select>
                </div>
                <div class="col-md-3 d-grid">
                    <button type="submit" class="btn btn-main">Cari</button>
                </div>
            </div>
        </form>

        <div class="row g-4">
            <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($data = mysqli_fetch_assoc($result)) {
                    $created = strtotime($data['created_at']);
                    $now = time();
                    $boleh_aksi = ($now - $created) < 172800;
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card item-card">
                            <div class="position-relative">
                                <img src="<?= getImg($data); ?>" class="card-img">
                                <span class="badge badge-cat text-white">
                                    <?= htmlspecialchars($data['kategori']); ?>
                                </span>
                            </div>
                            <div class="card-body text-center">
                                <small class="text-muted"><?= date('d M Y', strtotime($data['created_at'])); ?></small>
                                <h5 class="fw-bold mt-1" style="color: var(--primary-green);"><?= htmlspecialchars($data['nama_barang']); ?></h5>
                                <p class="text-secondary mb-1">Jumlah: <?= $data['jumlah']; ?></p>
                                <p class="small text-muted" style="height: 40px; overflow: hidden;"><?= htmlspecialchars($data['deskripsi'] ?? ''); ?></p>
                            </div>
                            <div class="card-footer bg-white border-0 d-flex gap-2 pb-3">
                                <?php if ($boleh_aksi): ?>
                                    <a class="btn btn-outline-main btn-sm flex-fill" href="barang/edit.php?id=<?= $data['id']; ?>">Edit</a>
                                    <a class="btn btn-outline-danger btn-sm flex-fill" href="#" onclick="konfirmasiHapus('barang/hapus.php?id=<?= $data['id']; ?>')">Hapus</a>
                                <?php else: ?>
                                    <button class="btn btn-secondary btn-sm w-100" disabled>Terkunci (> 2 Hari)</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <i class="bi bi-search fs-1 text-muted"></i>
                    <h5 class="mt-3">Barang tidak ditemukan</h5>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <footer class="pt-5 pb-0 footer-dark mt-5">
        <div class="container pb-4">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-12">
                    <h4 class="fw-bold mb-3">ShareGoods</h4>
                    <ul class="list-unstyled small" style="line-height: 1.6;">
                        <li class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt-fill me-3 fs-5 icon-custom"></i> Sleman City
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <i class="bi bi-telephone-fill me-3 fs-5 icon-custom"></i> +62 877 690 72
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="bi bi-envelope-fill me-3 fs-5 icon-custom"></i> oursharegoods@gmail.com
                        </li>
                    </ul>
                </div>

                <div class="col-lg-5 col-md-8">
                    <div class="row gy-3">
                        <div class="col-4">
                            <h6 class="fw-semibold mb-3">Company</h6>
                            <ul class="list-unstyled small gap-1 d-flex flex-column">
                                <li><a href="index.php" class="hover-link">Home</a></li>
                                <li><a href="#" class="hover-link">Projects</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <h6 class="fw-semibold mb-3">About</h6>
                            <ul class="list-unstyled small gap-1 d-flex flex-column">
                                <li><a href="#" class="hover-link">Agency</a></li>
                                <li><a href="#" class="hover-link">Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <h6 class="fw-semibold mb-3">Support</h6>
                            <ul class="list-unstyled small gap-1 d-flex flex-column">
                                <li><a href="#" class="hover-link">Services</a></li>
                                <li><a href="kontak.php" class="hover-link">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 text-lg-end text-start">
                    <h6 class="fw-semibold mb-3">Follow Us</h6>
                    <div class="d-flex gap-2 justify-content-lg-end justify-content-start">
                        <a href="#" class="btn btn-outline-light btn-social btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">
                            <i class="bi bi-facebook fs-6"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-social btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">
                            <i class="bi bi-twitter-x fs-6"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-social btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">
                            <i class="bi bi-instagram fs-6"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-3 footer-bottom">
            <div class="container text-center">
                <span class="small opacity-75">
                    © 2026 ShareGoods. All rights reserved.
                </span>
            </div>
        </div>
    </footer>

    <script>
        function konfirmasiHapus(url) {
            Swal.fire({
                title: 'Hapus barang ini?',
                text: "Data yang dihapus nggak bisa balik lagi loh!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#013D44',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            })
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>