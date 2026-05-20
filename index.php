<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShareGoods - Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">

    <style>
        .hero {
            background: url('./assets/pohon.jpg') center/cover no-repeat;
            height: 600px;
            position: relative;
            color: white;
            width: 100%;
        }

        .hero-overlay {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.2));
            height: 100%;
            display: flex;
            align-items: center;
            padding: 40px;
        }

        .section-eco {
            background-color: #ffffff !important;
            padding: 80px 0;
        }

        .product-item {
            border-radius: 20px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            position: relative;
            border: none;
            transition: 0.3s;
        }

        .card-eco {
            background-color: var(--bg-main) !important;
            border: none !important;
            border-radius: 20px !important;
            padding: 25px;
            transition: all 0.4s ease;
            box-shadow: 0 5px 15px rgba(1, 61, 68, 0.05) !important;
        }

        .card-eco:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(1, 61, 68, 0.1) !important;
        }

        @media (max-width: 992px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .impact-container {
                flex-direction: column;
                text-align: center;
            }

            .impact-photo-grid {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <nav class="navbar-floating">
            <a href="index.php" class="brand">ShareGoods</a>
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="AboutMe.php">Tentang</a>
                <a href="kontak.php">Kontak</a>
            </div>
            <div class="nav-right">
                <a href="auth/login.php" class="btn-custom">Masuk</a>
            </div>
        </nav>

        <div class="hero">
            <div class="hero-overlay">
                <div class="col-md-7 ps-4">
                    <h1 class="display-5 fw-bold mt-3">Berbagi Barang, <br>Kurangi Limbah</h1>
                    <p class="lead">Temukan dan bagikan barang bekas yang masih layak pakai dengan mudah di sekitarmu</p>
                    <a href="auth/login.php" class="btn-custom py-2 px-4 mt-2">Mulai Berbagi</a>
                </div>
            </div>
        </div>

        <div class="stats-box text-center">
            <div><span class="fs-5 fw-bold" style="color: var(--primary-green);">45</span><br><small class="text-muted">Barang</small></div>
            <div><span class="fs-5 fw-bold" style="color: var(--primary-green);">218%</span><br><small class="text-muted">Reuse</small></div>
            <div><span class="fs-5 fw-bold" style="color: var(--primary-green);">25</span><br><small class="text-muted">Donatur</small></div>
        </div>

        <div class="container py-5 mt-4">
            <div class="text-center mb-5">
                <h2 class="shop-title">Kategori</h2>
                <p class="text-muted fw-light" style="letter-spacing: 2px;">Kategori Barang Donasi</p>
            </div>

            <div class="row g-4 justify-content-center text-center">
                <div class="col-6 col-md-3">
                    <div class="product-item">
                        <img src="assets/clothes.jpg" alt="Pakaian">
                        <p class="mt-3 mb-0 fw-bold text-uppercase" style="color: var(--primary-green); font-size: 0.9rem;">Pakaian</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="product-item">
                        <img src="assets/kitchen.jpg" alt="Peralatan">
                        <p class="mt-3 mb-0 fw-bold text-uppercase" style="color: var(--primary-green); font-size: 0.9rem;">Peralatan Rumah</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="product-item">
                        <img src="assets/books.jpg" alt="Buku">
                        <p class="mt-3 mb-0 fw-bold text-uppercase" style="color: var(--primary-green); font-size: 0.9rem;">Buku & Alat Tulis</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="product-item">
                        <img src="assets/elects.jpg" alt="Elektronik">
                        <p class="mt-3 mb-0 fw-bold text-uppercase" style="color: var(--primary-green); font-size: 0.9rem;">Elektronik</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="d-flex flex-column align-items-start ps-md-5">
                        <div style="width: 55%; z-index: 2;">
                            <img src="assets/donasi.jpeg" class="img-fluid shadow-lg rounded-4" alt="Donasi">
                        </div>
                        <div style="width: 60%; margin-top: -10%; margin-left: 30%; z-index: 1;">
                            <img src="assets/donate.jpg" class="img-fluid shadow rounded-4" alt="Donasi">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ps-md-4">
                    <div class="card border-0 shadow-lg" style="background-color: #fef9f3; border-radius: 25px;">
                        <div class="card-body p-5">
                            <h2 style="font-family: 'Georgia', serif; color: var(--primary-green); font-size: 2rem;">Kenapa Harus<br><span style="font-size: 1.2rem; color: #5a7d75;" class="fst-italic">— ShareGoods?</span></h2>
                            <hr style="opacity: 0.1; margin: 20px 0;">
                            <p style="line-height: 1.7; color: #444; text-align: justify;">
                                ShareGoods hadir sebagai solusi inovatif untuk menjembatani kebaikan antara pemilik barang dan mereka yang membutuhkan. Barang yang sudah tidak kamu gunakan lagi mungkin merupakan barang berharga bagi orang lain.
                            </p>
                            <a href="./auth/login.php" class="btn btn-custom mt-3">WORK WITH ME</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section-eco">
            <div class="container">
                <div class="text-center mb-5">
                    <div class="d-flex justify-content-center align-items-center mb-2">
                        <div style="width: 40px; height: 1px; background-color: var(--primary-green); opacity: 0.3;"></div>
                        <span class="mx-3 text-uppercase fw-bold" style="font-size: 0.8rem; color: var(--primary-green); letter-spacing: 3px;">Testimonials</span>
                        <div style="width: 40px; height: 1px; background-color: var(--primary-green); opacity: 0.3;"></div>
                    </div>
                    <h2 class="shop-title">Apa Kata Mereka?</h2>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card card-eco h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-quote quote-icon"></i>
                                <p class="testimonial-text">"Praktis banget buat yang mau decluttering (beres-beres) rumah. Nggak ribet daftarnya. Seneng bisa berbagi tanpa harus bingung nyari orangnya."</p>
                                <hr style="opacity: 0.1; width: 50px; margin: 20px auto;">
                                <img src="assets/jeje.jpg" class="rounded-circle testimonial-img mb-3 shadow-sm" alt="Jaehyun">
                                <h6 class="fw-bold mb-0" style="color: var(--primary-green);">Jung Jaehyun</h6>
                                <small class="text-muted">Donatur Aktif</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-eco h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-quote quote-icon"></i>
                                <p class="testimonial-text">"Sisa baju layak pakai di lemari numpuk, bingung mau dikemanain. Seneng banget bisa liat barang lama jadi manfaat buat orang lain. Terima kasih, ShareGoods!"</p>
                                <hr style="opacity: 0.1; width: 50px; margin: 20px auto;">
                                <img src="assets/jeni.jpg" class="rounded-circle testimonial-img mb-3 shadow-sm" alt="Jennie">
                                <h6 class="fw-bold mb-0" style="color: var(--primary-green);">Jennie Kim</h6>
                                <small class="text-muted">Donatur Setia</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-eco h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-quote quote-icon"></i>
                                <p class="testimonial-text">"Mantap aplikasinya. UI-nya clean dan gak ribet pas mau upload barang. Sukses terus ShareGoods, semoga makin rame yang pake."</p>
                                <hr style="opacity: 0.1; width: 50px; margin: 20px auto;">
                                <img src="assets/wonu.jpg" class="rounded-circle testimonial-img mb-3 shadow-sm" alt="Jeongwoo">
                                <h6 class="fw-bold mb-0" style="color: var(--primary-green);">Park Jeongwoo</h6>
                                <small class="text-muted">Donatur Baru</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="pt-5 pb-0 footer-dark">
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>