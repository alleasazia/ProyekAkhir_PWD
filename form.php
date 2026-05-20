<?php
session_start();
include './config/koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang - ShareGoods</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    
    <style>
        :root {
            --bg-main: #fcf9f5;
            --primary-green: #013D44;
            --footer-bg: #013D44;
            --footer-text: #b8d0c0;
        }

        body {
            background-color: var(--bg-main);
            font-family: 'Poppins', sans-serif;
            color: #1B211A;
            margin: 0;
        }

        .navbar-floating {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 10px 35px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: absolute; 
            top: 25px; 
            left: 50%;
            transform: translateX(-50%);
            width: 82%;
            max-width: 1100px;
            z-index: 1000;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08); 
            border-radius: 50px; 
        }

        .navbar-floating .brand {
            color: #013D44; 
            font-size: 1.4rem;
            font-weight: 700; 
            text-decoration: none;
        }

        .btn-custom-nav {
            background: #013D44; 
            color: white !important;
            padding: 9px 25px;
            border-radius: 50px; 
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .btn-custom-nav:hover { 
            background: #022A2E; transform: translateY(-2px);
        }

        .card-clean {
            border: none;
            border-radius: 24px;
            background: #fff;
            box-shadow: 0 10px 40px rgba(0,0,0,0.03);
            padding: 40px;
            max-width: 700px;
            margin: 60px auto 60px;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px;
            border: 1px solid #e0e0e0;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25 margin rgba(1, 61, 68, 0.1);
            border-color: var(--primary-green);
        }

        label {
            font-weight: 500;
            margin-bottom: 8px;
            color: #444;
        }
        @media (max-width: 768px) {
            .navbar-floating { width: 95%; padding: 10px 20px; }
            .card-clean { margin: 100px 15px 30px; padding: 25px; }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card-clean">
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="color: var(--primary-green);">Tambah Barang</h2>
                <p class="text-muted">Lengkapi formulir untuk berbagi barang Anda</p>
            </div>

            <form action="barang/proses_tambah.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option>Pakaian</option>
                        <option>Peralatan Rumah</option>
                        <option>Buku & Alat Tulis</option>
                        <option>Elektronik</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan nama barang" required>
                </div>

                <div class="mb-3">
                    <label>Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" min="1" placeholder="Masukkan minimal 1" required>
                </div>

                <div class="mb-3">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control" accept="image/*" required>
                </div>

                <div class="mb-4">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="4" placeholder="Tuliskan kondisi barang" required></textarea>
                </div>

                <button type="submit" name="submit" class="btn-custom-nav w-100 py-3 mb-3" style="border:none;">
                    Simpan Barang
                </button>
                
                <div class="text-center mt-3">
                    <a href="dashboard.php" class="text-decoration-none small fw-bold" style="color: var(--primary-green);">
                        <i class="bi bi-arrow-left"></i> Kembali ke Dashboard
                    </a>
                </div>
            </form>
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

                <div class="col-lg-3 col-md-4 text-lg-end text-start">
                    <h6 class="fw-semibold mb-3">Follow Us</h6>
                    <div class="d-flex gap-2 justify-content-lg-end justify-content-start">
                        <a href="#" class="btn btn-outline-light btn-social btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;"><i class="bi bi-facebook fs-6"></i></a>
                        <a href="#" class="btn btn-outline-light btn-social btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;"><i class="bi bi-twitter-x fs-6"></i></a>
                        <a href="#" class="btn btn-outline-light btn-social btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;"><i class="bi bi-instagram fs-6"></i></a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>