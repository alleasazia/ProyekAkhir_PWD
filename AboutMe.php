<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tentang Kami - ShareGoods</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
 
    <style>
        .hero {
            background:
                linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
                url("./assets/pohon.jpg") center/cover no-repeat;
            height: 450px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
            color: white;
            margin-bottom: 30px;
        }

        .hero-overlay {
            max-width: 600px;
            margin-top: 50px;
        }

        .hero-overlay h1 {
            font-weight: 700;
            letter-spacing: 1px;
            font-size: 3rem;
        }

                .card-eco {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 16px;
            border: none;
        }
        
        .card-eco:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.05) !important;
        }
    </style>
</head>

<body>
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

    <section class="hero">
        <div class="hero-overlay">
            <h1 class="mb-2">Tentang Kami</h1>
            <p class="fs-5 fw-light">Menghubungkan kebaikan melalui berbagi barang</p>
        </div>
    </section>

    <div class="container mt-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-about p-4 h-100 text-center shadow-sm card-eco" style="background-color: #ffffff;">
                    <i class="bi bi-bullseye fs-1 mb-3" style="color: var(--primary-green);"></i>
                    <h5 class="fw-bold">Visi</h5>
                    <p class="text-muted">Menjadi platform berbagi barang terbesar yang membantu mengurangi limbah dan meningkatkan kepedulian sosial.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-about p-4 h-100 text-center shadow-sm card-eco" style="background-color: #ffffff;">
                    <i class="bi bi-lightbulb fs-1 mb-3" style="color: var(--primary-green);"></i>
                    <h5 class="fw-bold">Misi</h5>
                    <p class="text-muted">Mempermudah masyarakat untuk mendonasikan barang layak pakai kepada yang membutuhkan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-about p-4 h-100 text-center shadow-sm card-eco" style="background-color: #ffffff;">
                    <i class="bi bi-heart fs-1 mb-3" style="color: var(--primary-green);"></i>
                    <h5 class="fw-bold">Nilai</h5>
                    <p class="text-muted">Kepedulian, keberlanjutan, dan kemudahan akses menjadi dasar utama platform ini.</p>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5 mt-5" style="background-color: var(--bg-main);">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <img src="./assets/donasi2.jpeg" alt="Cerita ShareGoods" class="img-fluid w-100" style="border-radius: 30px; box-shadow: 0 15px 30px rgba(0,0,0,0.08); object-fit: cover; height: 500px;">
                </div>
                <div class="col-lg-6 px-lg-5">
                    <h3 class="fw-bold mb-4" style="color: var(--text-dark); font-size: 28px;">Cerita Kami</h3>
                    <p class="text-muted lh-lg mb-5" style="font-size: 1.05rem;">
                        ShareGoods lahir dari kepedulian terhadap banyaknya barang layak pakai yang tidak dimanfaatkan dan akhirnya menjadi limbah. Di sisi lain, masih banyak masyarakat yang kesulitan mendapatkannya karena keterbatasan akses.
                    </p>
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0 me-4">
                            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 55px; height: 55px; background-color: var(--bg-section);">
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
                            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 55px; height: 55px; background-color: var(--bg-section);">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>