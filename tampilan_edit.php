
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #f5f7f6; }
        .card-form {
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .btn-custom { border-radius: 20px; }
        .container-custom { margin-top: 100px; }
    </style>
</head>
<body>

<div class="container container-custom">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card card-form p-4">
                <h4 class="fw-bold mb-3 text-center">Edit Barang</h4>

                <form action="proses_edit.php" method="POST">
                    <input type="hidden" name="id" value="<?= $barang['id']; ?>">

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="kategori" class="form-control" required>
                            <option value="Elektronik" <?= ($barang['kategori'] == 'Elektronik') ? 'selected' : ''; ?>>Elektronik</option>
                            <option value="Pakaian" <?= ($barang['kategori'] == 'Pakaian') ? 'selected' : ''; ?>>Pakaian</option>
                            <option value="Makanan" <?= ($barang['kategori'] == 'Makanan') ? 'selected' : ''; ?>>Makanan</option>
                            <option value="Lainnya" <?= ($barang['kategori'] == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" value="<?= $barang['nama_barang']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" value="<?= $barang['jumlah']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3" required><?= $barang['deskripsi']; ?></textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="../barang_saya.php" class="btn btn-secondary btn-custom">Kembali</a>
                        <button type="submit" class="btn btn-success btn-custom">Update</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

</body>
</html>