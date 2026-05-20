<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: auth/login.php");
    exit();
}

include "config/koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM barang ORDER BY id DESC LIMIT 8");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ShareGoods</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

    <style>
        .hero-dashboard {
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
    </style>
</head>

<body>
    <nav class="navbar-floating">
        <a href="index.php" class="brand">ShareGoods</a>
        <div class="nav-right d-flex align-items-center gap-3">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none gap-2 dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="small d-none d-md-inline" style="color: var(--primary-green)">
                        Halo, <b><?= $_SESSION['username']; ?></b>
                    </span>
                    <div class="rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 35px; height: 35px; background-color: var(--primary-green); color: white;">
                        <i class="bi bi-person-fill"></i>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-3 p-2" style="border-radius: 15px; min-width: 180px;">
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="barangsaya.php"><i class="bi bi-box-seam"></i> Barang Saya</a></li>
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="form.php"><i class="bi bi-plus-circle"></i> Tambah Barang</a></li>
                    <li>
                        <hr class="dropdown-divider opacity-50">
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2 text-danger" href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-dashboard">
        <div class="hero-overlay">
            <h1>Berbagi Barang Layak Pakai</h1>
            <p class="fs-5 fw-light">Menghubungkan kebaikan melalui tangan-tangan peduli</p>
        </div>
    </section>

    <div class="section-tutorial">
        <div class="d-flex justify-content-center align-items-center mb-4">
            <div style="width: 40px; height: 1px; background-color: var(--primary-green); opacity: 0.3;"></div>
            <span class="mx-3 text-uppercase fw-bold" style="font-size: 1.5rem; color: var(--primary-green); letter-spacing: 3px;">How Does We Works</span>
            <div style="width: 40px; height: 1px; background-color: var(--primary-green); opacity: 0.3;"></div>
        </div>
        <div class="tutorial-grid">
            <div class="step-card">
                <div class="icon-container"><i class="bi bi-camera"></i></div>
                <h5 class="card-title-new">Foto Barang</h5>
                <p class="card-desc-new">Ambil foto barang layak pakaimu dari berbagai sisi agar terlihat jelas.</p>
            </div>
            <div class="step-card">
                <div class="icon-container"><i class="bi bi-pencil-square"></i></div>
                <h5 class="card-title-new">Isi Formulir</h5>
                <p class="card-desc-new">Lengkapi nama barang, kategori, dan deskripsi kondisi barang tersebut.</p>
            </div>
            <div class="step-card">
                <div class="icon-container"><i class="bi bi-cloud-check"></i></div>
                <h5 class="card-title-new">Unggah</h5>
                <p class="card-desc-new">Klik upload dan barangmu akan tampil di katalog untuk dipantau penerima.</p>
            </div>
        </div>
    </div>

    <div class="container mt-3 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded-4 text-center">
                    <div class="card-body p-4">
                        <h2 style="font-family: 'Georgia', serif; color: var(--primary-green); font-size: 2.2rem; margin-bottom: 10px;">
                            Punya Barang Untuk Dibagikan?<br>
                            <span style="font-size: 1.2rem; color: #5a7d75;" class="fst-italic">— Share It Now</span>
                        </h2>
                        <hr style="opacity: 0.1; margin: 15px auto; width: 50%;">
                        <p style="color: #666; max-width: 500px; margin: 0 auto 20px; font-size: 15px;">Barang yang sudah tidak kamu gunakan lagi bisa menjadi sesuatu yang sangat berarti bagi orang lain.</p>
                        <a href="form.php" class="btn btn-custom-nav px-5 py-2">+ Tambah Barang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-impact">
        <div class="impact-container">
            <div class="impact-photo-grid">
                <img src="assets/donasi3.jpeg" alt="Impact 1">
                <img src="assets/donasi4.jpeg" alt="Impact 2">
                <img src="assets/donasi5.jpeg" alt="Impact 3">
                <img src="assets/donasi6.jpeg" alt="Impact 4">
            </div>
            <div class="impact-info">
                <span class="subtitle">Bukti Penyaluran Barang</span>
                <h2>BUKTI NYATA <b>KEBAIKANMU</b></h2>
                <p class="desc">Terima kasih atas kebaikanmu, banyak senyum yang tercipta di setiap sudut kota melalui barang-barang yang telah kamu bagikan.</p>

                <a href="#" class="btn btn-dark px-4 py-2 rounded-0 small mb-4">SELENGKAPNYA</a>

                <div class="impact-icons">
                    <div class="impact-icon-item">
                        <div class="impact-icon-circle"><i class="bi bi-star"></i></div>
                        <div class="impact-icon-text">
                            <span>Premium</span>
                            <small>Barang terseleksi kualitas terbaik.</small>
                        </div>
                    </div>
                    <div class="impact-icon-item">
                        <div class="impact-icon-circle"><i class="bi bi-heart"></i></div>
                        <div class="impact-icon-text">
                            <span>Health</span>
                            <small>Menjamin kebersihan barang.</small>
                        </div>
                    </div>
                    <div class="impact-icon-item">
                        <div class="impact-icon-circle"><i class="bi bi-flower1"></i></div>
                        <div class="impact-icon-text">
                            <span>Nature</span>
                            <small>Mengurangi limbah lingkungan.</small>
                        </div>
                    </div>
                    <div class="impact-icon-item">
                        <div class="impact-icon-circle"><i class="bi bi-cup-hot"></i></div>
                        <div class="impact-icon-text">
                            <span>Organic</span>
                            <small>Berbagi tulus tanpa imbalan.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-barang-terbaru">
        <span class="tagline">ShareGoods</span>
        <h2>DONASI <b>MEREKA</b></h2>

        <div class="product-grid">
            <?php
            while ($data = mysqli_fetch_assoc($query)):
            ?>
                <div class="product-item-dashboard">
                    <div class="product-image-box">
                        <img class="product-img"
                            src="<?= !empty($data['gambar'])
                                        ? './uploads/' . $data['gambar']
                                        : 'assets/default.jpg'; ?>"
                            alt="<?= htmlspecialchars($data['nama_barang']); ?>">
                    </div>

                    <div class="product-info">
                        <h3 class="product-title">
                            <span><?= htmlspecialchars($data['kategori']); ?></span>
                            <?= htmlspecialchars($data['nama_barang']); ?>
                        </h3>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <footer class="pt-5 pb-0 footer-dark mt-5">
        <div class="container pb-4">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-12">
                    <h4 class="fw-bold mb-3">ShareGoods</h4>
                    <ul class="list-unstyled small" style="line-height: 1.6;">
                        <li class="d-flex align-items-center mb-2"><i class="bi bi-geo-alt-fill me-3 fs-5 icon-custom"></i> Sleman City</li>
                        <li class="d-flex align-items-center mb-2"><i class="bi bi-telephone-fill me-3 fs-5 icon-custom"></i> +62 877 690 72</li>
                        <li class="d-flex align-items-center"><i class="bi bi-envelope-fill me-3 fs-5 icon-custom"></i> oursharegoods@gmail.com</li>
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
                <div class="col-lg-3 col-md-4 text-lg-end">
                    <h6 class="fw-semibold mb-3">Follow Us</h6>
                    <div class="d-flex gap-2 justify-content-lg-end">
                        <a href="#" class="btn btn-outline-light btn-social btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-outline-light btn-social btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="btn btn-outline-light btn-social btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 footer-bottom">
            <div class="container text-center">
                <span class="small opacity-75">© 2026 ShareGoods. All rights reserved.</span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>