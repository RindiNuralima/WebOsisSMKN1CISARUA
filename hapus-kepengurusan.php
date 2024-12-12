<?php
session_start();
include 'config/app.php';

// Cek level pengguna, jika bukan admin (level 1), redirect ke halaman data anggota
if ($_SESSION['level'] != 1) {
    header("Location: data-kepengurusan.php");
    exit;
}
// Ambil ID kepengurusan dari parameter URL
$id_kepengurusan = $_GET['id'] ?? '';

if (empty($id_kepengurusan)) {
    echo "<script>
           alert('ID kepengurusan tidak valid.');
           document.location.href = 'data-kepengurusan.php';
           </script>";
    exit;
}
// Proses penghapusan data
if (delete_data_kepengurusan($id_kepengurusan) > 0) {
    echo "<script>
           alert('Data kepengurusan Berhasil Dihapus');
           document.location.href = 'data-kepengurusan.php';
           </script>";
} else {
    echo "<script>
           alert('Data kepengurusan Gagal Dihapus');
           document.location.href = 'data-kepengurusan.php';
           </script>";
}


?>

<?php include 'layout/footer.php'; ?>
