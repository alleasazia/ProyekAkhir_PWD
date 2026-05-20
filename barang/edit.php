<?php
session_start();
include '../config/koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id']) && $_GET['id']) {
    $id = $_GET['id'];
} else {
    echo "alert('Data tidak ditemukan')";
    die;
}
$data = mysqli_query($conn, "SELECT * FROM barang WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

if (!$row) {
    echo "Data tidak ditemukan!";
    die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShareGoods - Edit Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">

    <style>
        .card-clean {
            border: none;
            border-radius: 24px;
            background: #fff;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03);
            padding: 40px;
            max-width: 600px;
            margin: 60px auto 60px;
        }

        .form-control:focus {
            border-color: var(--primary-green);
            box-shadow: 0 0 0 0.25px rgba(1, 61, 68, 0.25);
        }

        @media (max-width: 768px) {
            .navbar-floating {
                width: 95%;
                padding: 10px 20px;
            }

            .card-clean {
                margin: 100px 15px 30px;
                padding: 25px;
            }
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="card-clean">
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="color: var(--primary-green);">Edit Barang</h2>
                <p class="text-muted">Perbarui deskripsi barang yang ingin Anda bagikan</p>
            </div>

            <form action="proses_edit.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']; ?>">

                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control bg-light" value="<?= $row['nama_barang']; ?>" readonly style="border-radius: 12px; border: 1px solid #eee; color: #6c757d;">
                    <small class="text-muted mt-1 d-block" style="font-size: 0.75rem;">*Nama barang tidak dapat diubah</small>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Deskripsi Baru</label>
                    <textarea name="deskripsi" class="form-control" rows="5" required style="border-radius: 12px;"><?= $row['deskripsi']; ?></textarea>
                </div>

                <button type="submit" class="btn-custom-nav w-100 py-3 mb-3" style="border:none;">
                    Update Data
                </button>

                <div class="text-center">
                    <a href="../barangsaya.php" class="text-decoration-none small text-muted">
                        Batal
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