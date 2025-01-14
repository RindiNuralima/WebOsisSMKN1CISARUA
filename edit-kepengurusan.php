<?php
session_start();
$title = 'Edit Anggota';
include 'layout/header.php'; // Menyertakan file header
include 'config/app.php'; // Menghubungkan ke database

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

// Ambil data kepengurusan berdasarkan ID
$result = mysqli_query($db, "SELECT * FROM data_kepengurusan WHERE id_kepengurusan = '$id_kepengurusan'");
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "<script>
           alert('Data kepengurusan tidak ditemukan.');
           document.location.href = 'data-kepengurusan.php';
           </script>";
    exit;
}

// Proses form submit
if (isset($_POST['update'])) {
    if (update_data_kepengurusan($_POST) > 0) {
        echo "<script>
               alert('Data kepengurusan Berhasil Diperbarui');
               document.location.href = 'data-kepengurusan.php';
               </script>";
    } else {
        echo "<script>
               alert('Data kepengurusan Gagal Diperbarui');
               document.location.href = 'data-kepengurusan.php';
               </script>";
    }
}
?>

<div class="container mt-5" style="padding-bottom: 100px;">
    <h1>Edit Kepengurusan</h1>
    <hr>
    <div class="container">
    <form action="" method="post" >
        <input type="hidden" name="id_kepengurusan" value="<?= htmlspecialchars($data['id_kepengurusan']); ?>">
        
        <div class="mb-3">
            <label for="nama_anggota" class="form-label">Nama Anggota</label>
            <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" value="<?= htmlspecialchars($data['nama_anggota']); ?>" placeholder="Nama anggota..." required>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= htmlspecialchars($data['jabatan']); ?>" placeholder="Jabatan..." required>
        </div>

        <div class="mb-3">
            <label for="thn_memulai" class="form-label">Tahun Memulai</label>
            <input type="date" class="form-control" id="thn_memulai" name="thn_memulai" value="<?= htmlspecialchars($data['thn_memulai']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="thn_selesai" class="form-label">Tahun Selesai</label>
            <input type="date" class="form-control" id="thn_selesai" name="thn_selesai" value="<?= htmlspecialchars($data['thn_selesai']); ?>" required>
        </div>

        <div class="d-flex justify-content-end mt-4">
    <a href="data-kepengurusan.php" class="btn btn-secondary">Kembali</a>
    <button type="submit" name="update" class="btn btn-primary" style="margin-left: 10px;">Update</button>
</div>
    </form>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
