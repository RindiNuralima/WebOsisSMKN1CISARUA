<?php
session_start();
$title = 'Tambah Pelantikan';
include 'layout/header.php'; // Menyertakan file header

// Proses form submit
if (isset($_POST['tambah'])) {
    if (create_data_pelantikan($_POST) > 0) {
        echo "<script>
               alert('Data pelantikan berhasil ditambahkan');
               document.location.href = 'data-pelantikan.php';
               </script>";
    } else {
        echo "<script>
               alert('Data pelantikan gagal ditambahkan');
               document.location.href = 'data-pelantikan.php';
               </script>";
    }
}
?>
<div class="container mt-5" style="padding-bottom: 100px;">
    <h1>Tambah Pelantikan</h1>
    <hr>
    <div class="container">
    <form action="" method="post" >
        <div class="mb-3">
            <label for="nama_anggota" class="form-label">Nama Anggota</label>
            <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Nama anggota..." required>
        </div>

        <div class="mb-3">
            <label for="thn_pelantikan" class="form-label">Tahun Pelantikan</label>
            <input type="date" class="form-control" id="thn_pelantikan" name="thn_pelantikan" required>
        </div>

        <div class="d-flex justify-content-end mt-4">
    <a href="data-pelantikan.php" class="btn btn-secondary">Kembali</a>
    <button type="submit" name="tambah" class="btn btn-primary" style="margin-left: 10px;">Tambah</button>
</div>
    </form>
    </div>
</div>
<?php include 'layout/footer.php'; ?>
