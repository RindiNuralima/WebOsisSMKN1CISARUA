<?php
session_start();
$title = 'Edit Anggota';
include 'layout/header.php'; // Menyertakan file header
include 'config/app.php'; // Menghubungkan ke database

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

// Ambil data organisasi berdasarkan ID
$result = mysqli_query($db, "SELECT * FROM data_organisasi_luar WHERE id_organisasi = '$id_organisasi'");
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "<script>
           alert('Data organisasi tidak ditemukan.');
           document.location.href = 'data-organisasi.php';
           </script>";
    exit;
}

// Proses form submit
if (isset($_POST['update'])) {
    if (update_data_Organisasi($_POST) > 0) {
        echo "<script>
               alert('Data organisasi Berhasil Diperbarui');
               document.location.href = 'data-organisasi.php';
               </script>";
    } else {
        echo "<script>
               alert('Data organisasi Gagal Diperbarui');
               document.location.href = 'data-organisasi.php';
               </script>";
    }
}
?>

<div class="container mt-5" style="padding-bottom: 100px;">
    <h1>Edit Organisasi</h1>
    <hr>
    <div class="container">
    <form action="" method="post" >
        <input type="hidden" name="id_organisasi" value="<?= htmlspecialchars($data['id_organisasi']); ?>">
        
        <div class="mb-3">
            <label for="nama_anggota" class="form-label">Nama Anggota</label>
            <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" value="<?= htmlspecialchars($data['nama_anggota']); ?>" placeholder="Nama anggota..." required>
        </div>

        <div class="mb-3">
            <label for="nama_organisasi" class="form-label">Nama Organisasi</label>
            <input type="text" class="form-control" id="nama_organisasi" name="nama_organisasi" value="<?= htmlspecialchars($data['nama_organisasi']); ?>" placeholder="Nama organisasi..." required>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= htmlspecialchars($data['jabatan']); ?>" placeholder="Jabatan..." required>
        </div>

        <div class="mb-3">
            <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="<?= htmlspecialchars($data['asal_sekolah']); ?>" placeholder="Asal sekolah..." required>
        </div>

        <div class="d-flex justify-content-end mt-4">
    <a href="data-organisasi.php" class="btn btn-secondary">Kembali</a>
    <button type="submit" name="update" class="btn btn-primary" style="margin-left: 10px;">Update</button>
</div>
    </form>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
