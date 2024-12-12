<?php
session_start();
include 'config/app.php';

// Cek level pengguna, jika bukan admin (level 1), redirect ke halaman data anggota
if ($_SESSION['level'] != 1) {
    header("Location: data-event.php");
    exit;
}
// Ambil ID event dari parameter URL
$id_kegiatan= $_GET['id'] ?? '';

if (empty($id_kegiatan)) {
    echo "<script>
           alert('ID event tidak valid.');
           document.location.href = 'data-event.php';
           </script>";
    exit;
}
// Proses penghapusan data
if (delete_data_kegiatan_event($id_kegiatan) > 0) {
    echo "<script>
           alert('Data event Berhasil Dihapus');
           document.location.href = 'data-event.php';
           </script>";
} else {
    echo "<script>
           alert('Data event Gagal Dihapus');
           document.location.href = 'data-event.php';
           </script>";
}

?>
<?php include 'layout/footer.php'; ?>
