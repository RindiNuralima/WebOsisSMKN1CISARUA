<?php
session_start();
$title = 'Edit Anggota';
include 'layout/header.php'; // Menyertakan file header
include 'config/app.php'; // Menghubungkan ke database

// Cek level pengguna, jika bukan admin (level 1), redirect ke halaman data anggota
if ($_SESSION['level'] != 1) {
    header("Location: data-pelantikan.php");
    exit;
}
// Ambil ID pelantikan dari parameter URL
$id_pelantikan = $_GET['id'] ?? '';

if (empty($id_pelantikan)) {
    echo "<script>
           alert('ID pelantikan tidak valid.');
           document.location.href = 'data-pelantikan.php';
           </script>";
    exit;
}

// Ambil data pelantikan berdasarkan ID
$result = mysqli_query($db, "SELECT * FROM data_pelantikan WHERE id_pelantikan = '$id_pelantikan'");
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "<script>
           alert('Data pelantikan tidak ditemukan.');
           document.location.href = 'data-pelantikan.php';
           </script>";
    exit;
}

// Proses form submit
if (isset($_POST['update'])) {
    if (update_data_pelantikan($_POST) > 0) {
        echo "<script>
               alert('Data pelantikan berhasil diperbarui');
               document.location.href = 'data-pelantikan.php';
               </script>";
    } else {
        echo "<script>
               alert('Data pelantikan gagal diperbarui');
               document.location.href = 'data-pelantikan.php';
               </script>";
    }
}
?>
<div class="container mt-5" style="padding-bottom: 100px;">
    <h1>Edit Pelantikan</h1>
    <hr>
    <div class="container">
    <form action="" method="post" >
        <input type="hidden" name="id_pelantikan" value="<?= htmlspecialchars($data['id_pelantikan']); ?>">
        <div class="mb-3">
            <label for="nama_anggota" class="form-label">Nama Anggota</label>
            <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" value="<?= htmlspecialchars($data['nama_anggota']); ?>" placeholder="Nama anggota..." required>
        </div>

        <div class="mb-3">
            <label for="thn_pelantikan" class="form-label">Tahun Pelantikan</label>
            <input type="date" class="form-control" id="thn_pelantikan" name="thn_pelantikan" value="<?= htmlspecialchars($data['thn_pelantikan']); ?>" required>
        </div>

        <div class="d-flex justify-content-end mt-4">
    <a href="data-pelantikan.php" class="btn btn-secondary">Kembali</a>
    <button type="submit" name="update" class="btn btn-primary" style="margin-left: 10px;">Update</button>
</div>
    </form>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
