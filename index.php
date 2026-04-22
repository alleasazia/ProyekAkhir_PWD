<?php
session_start();
include 'config/koneksi.php';

if (!isset($_SESSION['username'])) {
    header("Location: auth/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>ShareGoods</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="assets/style.css">

    <style>
        body {
            background-color: white;
        }

        /* HERO */
        .hero {
            background: url('assets/pohon.jpg') center/cover no-repeat;
            height: 500px;
            border-radius: 20px;
            position: relative;
            color: white;
            width: 100%;
        }

        .hero-overlay {
    background: linear-gradient(
        to right,
        rgba(0,0,0,0.6),
        rgba(0,0,0,0.2)
    );
    height: 100%;
    display: flex;
    align-items: center;
    padding: 40px;
    border-radius: 20px;
}

        .card-custom {
            border-radius: 15px;
        }
    </style>
</head>

<body class="bg-main">

    <div class="main-wrapper">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid nav-container">
                <a class="logo text-decoration-none" href="#">ShareGoods</a>
                <div class="collapse navbar-collapse justify-content-center">
                    <div class="menu">
                        <a href="#">Home</a>
                        <a href="AboutMe.php">Tentang</a>
                        <a href="kontak.php">Kontak</a>
                    </div>
                </div>
                <div class="nav-right">
                    <a href="auth/login.php" class="btn-custom">Masuk</a>
                </div>
            </div>
        </nav>

        <div class="hero">
            <div class="hero-overlay">
                <div class="col-md-7">
                    <h1 class="display-4 fw-bold mt-3">Berbagi Barang, <br>Kurangi Limbah</h1>
                    <p class="lead">Temukan dan bagikan barang bekas yang masih layak pakai dengan mudah di sekitarmu</p>
                    <a href="auth/login.php" class="btn-custom py-2 px-4">Mulai Berbagi</a>
                </div>
            </div>
        </div>

        <div class="container py-5 mt-4">
    <div class="row align-items-center">
        
        <div class="col-md-6 position-relative mb-5 mb-md-0 px-md-4">
            
            <img src="assets/donasi.jpeg" class="img-fluid shadow-sm" alt="Tentang ShareGoods" 
                 style="border-radius: 12px; border: 10px solid white; width: 100%; object-fit: cover; aspect-ratio: 4/3;">

            <div class="position-absolute shadow d-flex flex-column align-items-center justify-content-center text-white" 
                 style="top: -15px; left: 0px; width: 90px; height: 90px; background-color: #4b7b47; border-radius: 50%; border: 6px solid white; z-index: 2;">
                <i class="bi bi-box2-heart fs-4"></i>
                <span class="small fw-bold" style="font-size: 0.65rem; margin-top: 2px;">Berdonasi</span>
            </div>

            <div class="position-absolute shadow d-flex align-items-center justify-content-center bg-white" 
                 style="bottom: -15px; right: 0px; width: 65px; height: 65px; border-radius: 50%; border: 6px solid white; z-index: 2;">
                <i class="bi bi-tree-fill fs-3" style="color: #e67e22;"></i> 
            </div>
            
        </div>

        <div class="col-md-6 ps-md-5">
            <h2 class="fw-bold mb-3" style="color: #2d3436;">Kenapa Memilih <span style="color: #4b7b47;">ShareGoods?</span></h2>
            
            <p class="text-muted mb-4" style="line-height: 1.8;">
                ShareGoods adalah platform untuk mencatat dan membagikan barang bekas yang masih layak 
                pakai agar dapat dimanfaatkan kembali. Tujuan kami adalah mengurangi limbah dan membantu 
                sesama dengan cara sederhana.
            </p>
            
            <a href="#" class="btn rounded-pill px-4 py-2 text-white shadow-sm fw-medium d-inline-flex align-items-center" 
               style="background-color: #4b7b47;">
               <i class="bi bi-pin-map-fill me-2"></i> Pelajari Selengkapnya
            </a>
        </div>
        
    </div>
</div>

<section class="section-eco">
        <div class="container mt-5 py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Apa Kata Mereka?</h2>
    </div>
    
    <div class="row g-4">
        
        <div class="col-md-4">
    <div class="card card-eco h-100">
        <div class="text-center mt-4 mb-2">
            <img src="assets/jeje.jpg" class="rounded-circle mx-auto shadow-sm" alt="Foto Jaehyun" style="width: 100px; height: 100px; object-fit: cover;">
        </div>
        <div class="card-body text-center d-flex flex-column">
            <h5 class="fw-bold mt-2">Jung Jaehyun</h5>
            <p class="text-muted small mb-4">"Praktis banget buat yang mau decluttering (beres-beres) rumah. Nggak ribet daftarnya. Seneng bisa berbagi tanpa harus bingung nyari orangnya kemana."</p>
        </div>
    </div>
</div>

        <div class="col-md-4">
    <div class="card card-eco h-100">
        <div class="text-center mt-4 mb-2">
            <img src="assets/jeni.jpg" class="rounded-circle mx-auto shadow-sm" alt="Foto Jaehyun" style="width: 100px; height: 100px; object-fit: cover;">
        </div>
        <div class="card-body text-center d-flex flex-column">
            <h5 class="fw-bold mt-2">Jennie Kim</h5>
            <p class="text-muted small mb-4">"Sempet nyari meja lipat buat di kosan, eh iseng nyari di sini dan kebetulan dapet yang lokasinya deket. Barangnya masih mulus banget. Thank you banget buat yang udah mau bagi! Ngebantu banget asli."</p>
        </div>
    </div>
</div>

        <div class="col-md-4">
    <div class="card card-eco h-100">
        <div class="text-center mt-4 mb-2">
            <img src="assets/wonu.jpg" class="rounded-circle mx-auto shadow-sm" alt="Foto Jaehyun" style="width: 100px; height: 100px; object-fit: cover;">
        </div>
        <div class="card-body text-center d-flex flex-column">
            <h5 class="fw-bold mt-2">Park Jeongwoo</h5>
            <p class="text-muted small mb-4">"Mantap aplikasinya. UI-nya clean dan gak ribet pas mau upload barang. Sukses terus ShareGoods, semoga makin rame yang pake.</p>
        </div>
    </div>
</div>
</section>


        <footer class="pt-5 pb-0 bg-white" style="border-top: 1px solid #eee;">
            <div class="container pb-7">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-12">
                        <h4 class="fw-bold mb-3" style="color: #2d3436;">ShareGoods</h4>
                        <ul class="list-unstyled text-muted small" style="line-height: 1.8;">
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-geo-alt-fill me-2 text-success"></i> Sleman City
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-telephone-fill me-2 text-success"></i> +62 877 690 72
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-envelope-fill me-2 text-success"></i> oursharegoods@gmail.com
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div class="row">
                            <div class="col-4">
                                <h6 class="fw-bold mb-3">Company</h6>
                                <ul class="list-unstyled small">
                                    <li class="mb-2"><a href="#" class="text-decoration-none text-muted hover-link">Home</a></li>
                                    <li><a href="#" class="text-decoration-none text-muted hover-link">Projects</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <h6 class="fw-bold mb-3">About</h6>
                                <ul class="list-unstyled small">
                                    <li class="mb-2"><a href="#" class="text-decoration-none text-muted hover-link">Agency</a></li>
                                    <li><a href="#" class="text-decoration-none text-muted hover-link">Blog</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <h6 class="fw-bold mb-3">Support</h6>
                                <ul class="list-unstyled small">
                                    <li class="mb-2"><a href="#" class="text-decoration-none text-muted hover-link">Services</a></li>
                                    <li><a href="#" class="text-decoration-none text-muted hover-link">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 text-lg-end text-start">
                        <h6 class="fw-bold mb-3">Follow Us</h6>
                        <div class="d-flex gap-2 justify-content-lg-end justify-content-start">
                            <a href="#" class="btn btn-outline-success btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-outline-success btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                            <a href="#" class="btn btn-outline-success btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="py-3">
                <div class="container text-center">
                    <span class="text-black-50 small"> <b>
                            © 2026 ShareGoods. All rights reserved.
                        </b></span>
                </div>
            </div>
        </footer>

        <style>
            /* Sedikit sentuhan biar makin pro */
            .hover-link:hover {
                color: #198754 !important;
                /* Warna hijau success Bootstrap */
                transition: 0.3s;
            }

            .btn-outline-success:hover {
                color: white !important;
            }
        </style>
    </div>

</body>

</html>