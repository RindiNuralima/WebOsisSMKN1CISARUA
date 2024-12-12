<?php
session_start();
$title = 'Tambah Organisasi';
include 'layout/header.php'; // Menyertakan file header
include 'config/koneksi.php'; // Menghubungkan ke database

// Proses form submit
if (isset($_POST['tambah'])) {
    if (create_data_organisasi($_POST) > 0) {
        echo "<script>
               alert('Data organisasi berhasil ditambahkan');
               document.location.href = 'data-organisasi.php';
               </script>";
    } else {
        echo "<script>
               alert('Data organisasi gagal ditambahkan');
               document.location.href = 'data-organisasi.php';
               </script>";
    }
}
?>
<div class="container mt-5" style="padding-bottom: 100px;">
    <h1>Tambah Organisasi</h1>
    <hr>
    <div class="container">
    <form action="" method="post" >
        <div class="mb-3">
            <label for="nama_anggota" class="form-label">Nama Anggota</label>
            <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Nama anggota..." required>
        </div>

        <div class="mb-3">
            <label for="nama_organisasi" class="form-label">Nama Organisasi</label>
            <input type="text" class="form-control" id="nama_organisasi" name="nama_organisasi" placeholder="Nama organisasi..." required>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan..." required>
        </div>

        <div class="mb-3">
            <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal sekolah..." required>
        </div>

        <div class="d-flex justify-content-end mt-4">
    <a href="data-organisasi.php" class="btn btn-secondary">Kembali</a>
    <button type="submit" name="tambah" class="btn btn-primary" style="margin-left: 10px;">Tambah</button>
</div>
    </form>
    </div>
</div>
<?php include 'layout/footer.php'; ?>
