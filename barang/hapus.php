<?php
include '../config/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $hapus = mysqli_query($conn, "DELETE FROM barang WHERE id='$id'");

    if ($hapus) {
        echo '
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            setTimeout(function() {
                Swal.fire({
                    title: "Berhasil!",
                    text: "Barang kamu sudah dihapus.",
                    icon: "success",
                    confirmButtonColor: "#064e4b", // Warna Dark Teal (senada footer)
                    confirmButtonText: "Sip, Mantap!"
                }).then(function() {
                    // Balik ke halaman barang saya
                    window.location.href = "../barangsaya.php";
                });
            }, 100);
        </script>';
    } else {
        echo "Aduh, gagal hapus nih: " . mysqli_error($conn);
    }
} else {
    echo "ID barang nggak ada, mau hapus apa?";
}
?>