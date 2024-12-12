<?php
session_start();
$title = 'Edit Anggota';
include 'layout/header.php'; // Menyertakan file header
include 'config/app.php'; // Menghubungkan ke database


// Cek level pengguna, jika bukan admin (level 1), redirect ke halaman data anggota
if ($_SESSION['level'] != 1) {
    header("Location: data-event.php");
    exit;
}

// Ambil ID event dari parameter URL
$id_kegiatan = $_GET['id'] ?? '';

if (empty($id_kegiatan)) {
    echo "<script>
           alert('ID event tidak valid.');
           document.location.href = 'data-event.php';
           </script>";
    exit;
}

// Ambil data event berdasarkan ID
$result = mysqli_query($db, "SELECT * FROM data_kegiatan_event WHERE id_kegiatan = '$id_kegiatan'");
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "<script>
           alert('Data event tidak ditemukan.');
           document.location.href = 'data-event.php';
           </script>";
    exit;
}

// Proses form submit
if (isset($_POST['update'])) {
    if (update_data_event($_POST) > 0) {
        echo "<script>
               alert('Data event berhasil diperbarui');
               document.location.href = 'data-event.php';
               </script>";
    } else {
        echo "<script>
               alert('Data event gagal diperbarui');
               document.location.href = 'data-event.php';
               </script>";
    }
}
?>
<div class="container mt-5" style="padding-bottom: 100px;">
    <h1>Edit Event</h1>
    <hr>
    <div class="container">
    <form action="" method="post" >
        <input type="hidden" name="id_event" value="<?= htmlspecialchars($data['id_kegiatan']); ?>">
        
        <div class="mb-3">
            <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
            <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="<?= htmlspecialchars($data['nama_kegiatan']); ?>" placeholder="Nama kegiatan..." required>
        </div>

        <div class="mb-3">
            <label for="tgl_kegiatan" class="form-label">Tanggal Kegiatan</label>
            <input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" value="<?= htmlspecialchars($data['tgl_kegiatan']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="lokasi_kegiatan" class="form-label">Lokasi Kegiatan</label>
            <input type="text" class="form-control" id="lokasi_kegiatan" name="lokasi_kegiatan" value="<?= htmlspecialchars($data['lokasi_kegiatan']); ?>" placeholder="Lokasi kegiatan..." required>
        </div>

        <div class="d-flex justify-content-end mt-4">
    <a href="data-event.php" class="btn btn-secondary">Kembali</a>
    <button type="submit" name="update" class="btn btn-primary" style="margin-left: 10px;">Update</button>
</div>
    </form>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
