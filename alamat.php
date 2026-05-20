<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShareGoods - Alamat Pengiriman</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

    <style>
        .card-clean {
            border: none;
            border-radius: 24px;
            background: #fff;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03);
            padding: 40px;
            max-width: 700px;
            /*beda disini sama css edit*/
            margin: 60px auto 60px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card-clean">
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="color: var(--primary-green);">Alamat Pengiriman</h2>
                <p class="text-muted">Kirim ke alamat berikut dan ikuti langkah pengirimannya</p>
            </div>

            <div class="alamat-box mb-4" id="alamat">
                <h6 class="fw-bold mb-2">ShareGoods Warehouse</h6>
                Jl. Raya. 1997, Sukarame<br>
                Sleman City, 141997<br>
                +62 877 690 72
            </div>

            <button onclick="copyAlamat()" class="btn-custom-nav w-100 py-3 mb-5" style="border:none;">
                <i class="bi bi-copy me-2"></i> Salin Alamat
            </button>

            <div class="mt-4">
                <h6 class="fw-bold mb-3"><i class="bi bi-info-circle me-2"></i> Langkah Pengiriman:</h6>
                <div class="step-item text-muted small">
                    <i class="bi bi-check2-circle text-success fs-5"></i> Pastikan barang layak pakai & dibungkus aman.
                </div>
                <div class="step-item text-muted small">
                    <i class="bi bi-check2-circle text-success fs-5"></i> Tempel alamat tujuan dengan jelas.
                </div>
                <div class="step-item text-muted small">
                    <i class="bi bi-check2-circle text-success fs-5"></i> Kirim melalui jasa ekspedisi pilihanmu.
                </div>
                <div class="step-item text-muted small border-0">
                    <i class="bi bi-check2-circle text-success fs-5"></i> Simpan bukti resi pengiriman.
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="barangsaya.php" class="text-decoration-none small fw-bold" style="color: var(--primary-green);">
                    Ke Barang Saya <i class="bi bi-arrow-right"></i>
                </a>
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

    <script>
        function copyAlamat() {
            let text = document.getElementById("alamat").innerText;
            navigator.clipboard.writeText(text);
            alert("Alamat berhasil disalin!");
        }
    </script>
</body>

</html>