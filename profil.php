<?php
session_start();
// Membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
        alert('Login dulu');
        document.location.href = 'login.php';
        </script>";
    exit;
}
include 'layout\header.php'; 
?>
<div class="container-fluid text-center mt-0 my-4 py-3" style="background-color: #add8e6; height: auto;">
    <div class="row">
        <div class="col-12">
            <h2 class="display-4">PROFIL</h2>
            <p class="lead">Mengenal Lebih Jauh Osis Smkn 1 Cisarua </p>
        </div>
    </div>
</div>
<div class="container mt-5 my-4"> 
    <h5>PROFIL --------------------</h5>
    <h2>OSCAR (OSIS SMK NEGERI 1 CISARUA)</h2>
</div>
<div class="container">
    <p>OSIS merupakan kependekan dari Organisasi Siswa Intra Sekolah. Organisasi ini berada di tingkat sekolah menengah, yaitu SMP dan SMA. OSIS menjadi wadah bagi para siswa untuk berkumpul dan mencapai tujuan tertentu. Susunan kepengurusan OSIS terdiri dari Ketua, Wakil Ketua, Sekretaris, Bendahara, dan beberapa seksi lainnya. Setiap jabatan dalam OSIS memiliki tugas masing-masing.</p>
    <p>Masa kerja kepengurusan OSIS terbatas, yaitu selama satu tahun, dan setelah itu akan diperbaharui kembali. OSIS merupakan wadah yang memfasilitasi para siswa untuk bekerja sesuai dengan tugasnya demi kepentingan sekolah dan seluruh siswa. Selain itu, OSIS juga berfungsi sebagai pendorong berkembangnya kemampuan dan kreativitas siswa.</p>
    <p>Selain berfungsi sebagai pendorong, OSIS juga berperan sebagai pencegah, yaitu mencegah munculnya pengaruh negatif pada siswa. Dengan adanya OSIS, siswa dapat mengikuti kegiatan positif yang dapat memaksimalkan kemampuan dan kreativitas mereka.</p>
</div>
<div class="container my-5">
    <div class="row">
        <!-- Misi Section -->
        <div class="col-12 col-md-6 mb-4">
            <div class="card shadow-sm" style="background-color: #add8e6; color: #ffffff;">
                <div class="card-body">
                    <h3 class="card-title text-center text-stroke">MISI</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="background-color: #add8e6; color: #ffffff;">Menanamkan keimanan dan ketaqwaan melalui pengamalan ajaran agama.</li>
                        <li class="list-group-item" style="background-color: #add8e6; color: #ffffff;">Menjadikan OSIS yang berkarakter dan berwawasan luas.</li>
                        <li class="list-group-item" style="background-color: #add8e6; color: #ffffff;">Mengadakan pelatihan-pelatihan yang mendukung peningkatan pengetahuan dan skill dari masing-masing siswa.</li>
                        <li class="list-group-item" style="background-color: #add8e6; color: #ffffff;">Menciptakan ajang apresiasi terhadap karya siswa/i di segala bidang tanpa dibatasi.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Visi  -->
        <div class="col-12 col-md-6 mb-4">
            <div class="card shadow-sm" style="background-color:#add8e6; color: #ffffff;">
                <div class="card-body">
                    <h3 class="card-title text-center text-stroke">VISI</h3>
                    <p class="card-text">Meningkatkan kualitas SMKN 1 Cisarua berdasarkan iman dan taqwa dengan OSIS sebagai wadah bagi para siswa/i untuk mengembangkan potensi diri & menjadikan OSIS sebagai media pembelajaran untuk mencerdaskan siswa/i SMKN 1 Cisarua.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <!-- Peta Google Maps -->
        <div class="col-md-6">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6655535351724!2d107.56538517327907!3d-6.810473593187093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e3d3f4f7be0f%3A0x92af10dbbdf42097!2sSMK%20Negeri%201%20Cisarua%20%7C%20Kab.%20Bandung%20Barat!5e0!3m2!1sid!2sid!4v1725412412492!5m2!1sid!2sid" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <!-- Teks Lokasi -->
            <div class="col-md-6 d-flex align-items-center">
            <div class="card shadow-sm" style="background-color:#add8e6; color: #ffffff;">
                <div class="card-body">
                <h3 class="text-center">Lokasi</h3>
                <p class="text-center">SMK Negeri 1 Cisarua <br> Jl. Raya Cisarua No. 1, Cisarua, Kabupaten Bandung Barat, Jawa Barat, Indonesia</p>
                </div>
            </div>
            </div> 
            </div>
        </div>
    </div>
<?php  include 'layout\footer.php'; ?>