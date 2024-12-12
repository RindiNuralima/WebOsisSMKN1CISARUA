<?php
session_start();
include 'config/app.php';

// Cek level pengguna, jika bukan admin (level 1), redirect ke halaman data anggota
if ($_SESSION['level'] != 1) {
    header("Location: data-organisasi.php");
    exit;
}
// Ambil ID organisasi dari parameter URL
$id_organisasi = $_GET['id'] ?? '';

if (empty($id_organisasi)) {
    echo "<script>
           alert('ID Organisasi tidak valid.');
           document.location.href = 'data-organisasi.php';
           </script>";
    exit;
}

// Proses penghapusan data
if (delete_data_Organisasi($id_organisasi) > 0) {
    echo "<script>
           alert('Data organisasi Berhasil Dihapus');
           document.location.href = 'data-organisasi.php';
           </script>";
} else {
    echo "<script>
           alert('Data organisasi Gagal Dihapus');
           document.location.href = 'data-organisasi.php';
           </script>";
}

?>
<?php include 'layout/footer.php'; ?>
