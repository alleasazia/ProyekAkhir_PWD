<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: index.php?pesan=terkirim");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kontak Kami - ShareGoods</title>

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

        .form-control {
            background-color: #ffffff !important;
            border: 1px solid rgba(1, 61, 68, 0.1);
            transition: 0.3s;
        }

        .form-control:focus {
            background-color: #ffffff !important;
            border-color: var(--primary-green);
            box-shadow: 0 0 0 0.25rem rgba(1, 61, 68, 0.1);
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
            <h1 class="mb-3">Hubungi Kami</h1>
            <p class="fs-5 fw-light">Punya pertanyaan, masukan, atau ingin berkolaborasi? Kami selalu siap mendengar dari Anda</p>
        </div>
    </section>

    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-lg-7" style="display: flex; justify-content: center;">
                <div class="card shadow-sm border-0 p-4 p-md-5 h-100" style="background-color: #ffffff; border-radius: 15px; width: 100%;">
                    <h4 class="fw-bold mb-4 text-center" style="color: var(--primary-green);">Kirim Pesan</h4>
                    <form action="" method="POST">
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
                                <button type="submit" class="btn px-4 py-2 fw-bold w-100 btn-custom">
                                    Kirim Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>