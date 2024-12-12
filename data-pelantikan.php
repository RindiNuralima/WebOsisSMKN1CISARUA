<?php
session_start();  
include 'layout/header.php'; 
?>
<div class="content-wrapper">
    <div class="container mt-5">
        <h1>Data Pelantikan</h1>
        <hr>
        <?php if ($_SESSION['level'] == 1) : // Admin ?>
        <a href="tambah-pelantikan.php" class="btn btn-primary mb-1">
            <i class="fas fa-plus-circle"></i> Tambah
        </a>
        <?php endif?>
        <table id="serverside" class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Tahun Pelantikan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Menghubungkan ke database
                include 'config/koneksi.php';
                
                // Query untuk mengambil data pelantikan
                $result = mysqli_query($db, "SELECT * FROM data_pelantikan");
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) :
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($row['nama_anggota']); ?></td> 
                    <td><?= htmlspecialchars($row['thn_pelantikan']); ?></td>
                    <td>
                    <?php if ($_SESSION['level'] == 1) : // Admin ?>
                        <a href="edit-pelantikan.php?id=<?= $row['id_pelantikan']; ?>" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="hapus-pelantikan.php?id=<?= $row['id_pelantikan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">
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
