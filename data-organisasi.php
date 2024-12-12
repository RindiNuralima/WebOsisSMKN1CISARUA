<?php
session_start();  
include 'layout/header.php'; 
?>
<div class="content-wrapper">
    <div class="container mt-5">
        <h1>Data Organisasi</h1>
        <hr>
        <?php if ($_SESSION['level'] == 1) : // Admin ?>
        <a href="tambah-Organisasi.php" class="btn btn-primary mb-1">
            <i class="fas fa-plus-circle"></i> Tambah
        </a>
        <?php endif?>
        <table id="serverside" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Nama Organisasi</th>
                    <th>Jabatan</th>
                    <th>Asal Sekolah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Menghubungkan ke database
                include 'config/koneksi.php';
                
                // Query untuk mengambil data dari tabel `data_organisasi_luar`
                $result = mysqli_query($db, "SELECT * FROM data_organisasi_luar");
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) :
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($row['nama_anggota']); ?></td>
                    <td><?= htmlspecialchars($row['nama_organisasi']); ?></td>
                    <td><?= htmlspecialchars($row['jabatan']); ?></td>
                    <td><?= htmlspecialchars($row['asal_sekolah']); ?></td>
                    <td>
                    <?php if ($_SESSION['level'] == 1) : // Admin ?>
                        <a href="edit-organisasi.php?id=<?= $row['id_organisasi']; ?>" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="hapus-organisasi.php?id=<?= $row['id_organisasi']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">
                            <i class="fas fa-trash"></i> Hapus
                        </a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
