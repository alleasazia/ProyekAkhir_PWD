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
    <title>Tentang Kami - ShareGoods</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/style.css">

    <style>
        body {
            background-color: #f5f7f4;
        }

        .about-hero {
            background: url('assets/pohon.jpg') center/cover no-repeat;
            height: 350px;
            border-radius: 20px;
            position: relative;
            color: white;
        }

        .overlay {
            background: rgba(0,0,0,0.4);
            height: 100%;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .card-about {
            border-radius: 20px;
            transition: 0.3s;
        }

        .card-about:hover {
            transform: translateY(-5px);
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
                        <a href="index.php">Home</a>
                        <a href="AboutMe.php">Tentang</a>
                        <a href="kontak.php">Kontak</a>
                    </div>
                </div>
                <div class="nav-right">
                    <a href="auth/login.php" class="btn-custom">Masuk</a>
                </div>
            </div>
        </nav>

    <!-- HERO -->
    <div class="about-hero mt-10">
        <div class="overlay">
            <div>
                <h1 class="fw-bold">Tentang Kami</h1>
                <p>Menghubungkan kebaikan melalui berbagi barang</p>
            </div>
        </div>
    </div>

    <!-- VISI MISI -->
    <div class="container mt-5">
        

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card card-about p-4 h-100 text-center shadow-sm card-eco" style="background-color: #f9fbf7;">
                    <i class="bi bi-bullseye fs-1 text-success mb-3"></i>
                    <h5 class="fw-bold">Visi</h5>
                    <p class="text-muted">Menjadi platform berbagi barang terbesar yang membantu mengurangi limbah dan meningkatkan kepedulian sosial.</p>                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-about p-4 h-100 text-center shadow-sm card-eco" style="background-color: #f9fbf7;">
                    <i class="bi bi-lightbulb fs-1 text-success mb-3"></i>
                    <h5 class="fw-bold">Misi</h5>
                    <p class="text-muted">Mempermudah masyarakat untuk mendonasikan barang layak pakai kepada yang membutuhkan.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-about p-4 h-100 text-center shadow-sm card-eco" style="background-color: #f9fbf7;">
                    <i class="bi bi-heart fs-1 text-success mb-3"></i>
                    <h5 class="fw-bold">Nilai</h5>
                    <p class="text-muted">Kepedulian, keberlanjutan, dan kemudahan akses menjadi dasar utama platform ini.</p>
                </div>
            </div>

        </div>
    </div>

    <section class="py-5" style="background-color: var(--bg-main);">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            
            <div class="col-lg-6 position-relative">
                <img src="./assets/donasi2.jpeg" 
                     alt="Cerita ShareGoods" 
                     class="img-fluid w-100" 
                     style="border-radius: 30px; box-shadow: 0 15px 30px rgba(0,0,0,0.08); object-fit: cover; height: 500px;">
                
                
            </div>

            <div class="col-lg-6 px-lg-5">
                <h3 class="fw-bold mb-4" style="color: var(--text-dark); font-size: 28px;">Cerita Kami</h3>

                <p class="text-muted lh-lg mb-5" style="font-size: 1.05rem;">
                    ShareGoods lahir dari kepedulian terhadap banyaknya barang layak pakai yang tidak dimanfaatkan dan akhirnya menjadi limbah. Di sisi lain, masih banyak masyarakat yang kesulitan mendapatkannya karena keterbatasan akses.
                </p>

                <div class="d-flex mb-4">
                    <div class="flex-shrink-0 me-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center" 
                             style="width: 55px; height: 55px; background-color: var(--bg-section);">
                            <i class="bi bi-people-fill fs-4" style="color: var(--primary-green);"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2" style="color: var(--text-dark);">Menghubungkan Kebaikan</h5>
                        <p class="text-muted mb-0">Hadir sebagai solusi untuk menghubungkan orang-orang yang ingin berbagi dengan mereka yang membutuhkan secara langsung dan mudah.</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="flex-shrink-0 me-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center" 
                             style="width: 55px; height: 55px; background-color: var(--bg-section);">
                            <i class="bi bi-recycle fs-4" style="color: var(--primary-green);"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2" style="color: var(--text-dark);">Gaya Hidup Berkelanjutan</h5>
                        <p class="text-muted mb-0">Berkomitmen menciptakan ekosistem transparan untuk mendorong kepedulian sosial demi perubahan positif bagi lingkungan.</p>
                    </div>
                </div>

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
</div>

<style>
/* tambahan biar konsisten */
.user-badge {
    background: #e9f7ef;
    border-radius: 50px;
    font-weight: 500;
}
</style>

</body>
</html>