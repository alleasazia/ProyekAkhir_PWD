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
                <h1 class="fw-bold">Hubungi Kami</h1>
                <p>Punya pertanyaan, masukan, atau ingin berkolaborasi? Kami selalu siap mendengar dari Anda</p>
            </div>
        </div>
    </div>





    

    <div class="row justify-content-center my-5">
                <div class="col-lg-7" style="display: flex; justify-content: center;">
                    <div class="card shadow-sm border-0 p-4 p-md-5 h-100" style="background-color: #f9fbf7; border-radius: 15px;">
                        <h4 class="fw-bold mb-4 text-earth-dark text-center">Kirim Pesan</h4>
                        <form action="index.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Anda" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="email@contoh.com" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Subjek</label>
                                    <input type="text" name="subjek" class="form-control" placeholder="Hal yang ingin ditanyakan" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Pesan</label>
                                    <textarea name="pesan" class="form-control" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-earth px-4 py-2 fw-bold w-100 btn-custom">Kirim Pesan Sekarang</></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                    </div>


    
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