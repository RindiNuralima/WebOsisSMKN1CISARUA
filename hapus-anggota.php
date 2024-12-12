<?php
session_start();
include 'config/app.php';

// Cek level pengguna, jika bukan admin (level 1), redirect ke halaman data anggota
if ($_SESSION['level'] != 1) {
    header("Location: data-anggota.php");
    exit;
}
$title = 'Hapus Anggota';
include 'layout/header.php'; // Menyertakan file header
include 'config/koneksi.php'; // Menghubungkan ke database

// Ambil ID anggota dari parameter URL
$id_anggota = $_GET['id'] ?? '';

if (empty($id_anggota)) {
    echo "<script>
           alert('ID Anggota tidak valid.');
           document.location.href = 'data-anggota.php';
           </script>";
    exit;
}
// Proses penghapusan data
if (delete_data_anggota($id_anggota) > 0) {
    echo "<script>
           alert('Data anggota Berhasil Dihapus');
           document.location.href = 'data-anggota.php';
           </script>";
} else {
    echo "<script>
           alert('Data anggota Gagal Dihapus');
           document.location.href = 'data-anggota.php';
           </script>";
}


?>

<?php include 'layout/footer.php'; ?>
