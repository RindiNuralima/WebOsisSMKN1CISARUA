<?php
session_start();
include 'config/app.php';

// Cek level pengguna, jika bukan admin (level 1), redirect ke halaman data anggota
if ($_SESSION['level'] != 1) {
    header("Location: data-pelantikan.php");
    exit;
}
// Ambil ID pelantikan dari parameter URL
$id_pelantikan= $_GET['id'] ?? '';

if (empty($id_pelantikan)) {
    echo "<script>
           alert('ID pelantikan tidak valid.');
           document.location.href = 'data-pelantikan.php';
           </script>";
    exit;
}
// Proses penghapusan data
if (delete_data_pelantikan($id_pelantikan) > 0) {
    echo "<script>
           alert('Data pelantikan Berhasil Dihapus');
           document.location.href = 'data-pelantikan.php';
           </script>";
} else {
    echo "<script>
           alert('Data pelantikan Gagal Dihapus');
           document.location.href = 'data-pelantikan.php';
           </script>";
}

?>
<?php include 'layout/footer.php'; ?>
