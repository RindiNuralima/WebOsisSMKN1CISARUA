<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION["login"])) {
    echo "<script>
        alert('Login dulu');
        document.location.href = 'login.php';
        </script>";
    exit;
}

// Cek apakah level user ada dan apakah user memiliki hak akses
if (!isset($_SESSION["level"]) || ($_SESSION["level"] != 1 && $_SESSION["level"] != 2)) {
   echo "<script>
       alert ('Anda tidak memiliki hak akses');
       document.location.href = 'akun.php';
       </script>";
   exit;
}

include 'layout/header.php'; 
?>
<body>
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <!-- Ganti <li> dengan <button> untuk Bootstrap 5 -->
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/SMK1.jpg" class="d-block w-100" alt="gambar osis1">
            <div class="carousel-caption d-none d-md-block">
                <h2>OSIS SMK NEGERI 1 CISARUA</h2>
                <p>Selamat Datang Di Website OSIS SMKN 1 Cisarua.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/SMK3.jpeg" class="d-block w-100" alt="gambar osis2">
            <div class="carousel-caption d-none d-md-block">
                <h2>OSIS SMK NEGERI 1 CISARUA</h2>
                <p>Selamat Datang Di Website OSIS SMKN 1 Cisarua.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/poto4.jpg" class="d-block w-100" alt="gambar osis3">
            <div class="carousel-caption d-none d-md-block">
                <h2>OSIS SMK NEGERI 1 CISARUA</h2>
                <p>Selamat Datang Di Website OSIS SMKN 1 Cisarua.</p>
            </div>
        </div>
    </div>
</div>

<div class="container text-center mt-5 my-4">
    <h2>Bersama Majukan Sekolah</h2>
    <p>OSIS berkomitmen untuk merancang berbagai program yang dapat menunjang kreativitas, kedisiplinan, dan kerohanian siswa.</p>
</div>

<div class="container">
    <div class="row" style="margin-top: 30px;">
        <!-- Kegiatan Kerohanian -->
        <div class="col-md-4">
            <div class="card border-0 shadow-none mb-4 text-center">
                <div class="card-body">
                    <i class="bi bi-bookmark-heart text-primary" style="font-size: 3rem;"></i>
                    <h5 class="card-title mt-3">Kegiatan Kerohanian</h5>
                    <p class="card-text">Kegiatan kerohanian dan pembangunan karakter di SMKN 1 Cisarua...</p>
                </div>
            </div>
        </div>

        <!-- Berbagai Jenis Perlombaan -->
        <div class="col-md-4">
            <div class="card border-0 shadow-none mb-4 text-center">
                <div class="card-body">
                    <i class="bi bi-trophy text-warning" style="font-size: 3rem;"></i>
                    <h5 class="card-title mt-3">Berbagai Jenis Perlombaan</h5>
                    <p class="card-text">Berbagai perlombaan, baik akademik maupun non-akademik...</p>
                </div>
            </div>
        </div>

        <!-- Rasa Nasionalisme & Cinta Tanah Air -->
        <div class="col-md-4">
            <div class="card border-0 shadow-none mb-4 text-center">
                <div class="card-body">
                    <i class="bi bi-flag text-danger" style="font-size: 3rem;"></i>
                    <h5 class="card-title mt-3">Rasa Nasionalisme & Cinta Tanah Air</h5>
                    <p class="card-text">Upacara rutin pada hari-hari penting seperti Hari Pahlawan...</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container text-center mt-5 my-4">
    <h2>PROGRAM KERJA OSIS SMKN 1 CISARUA</h2>
    <p>Berbagai kegiatan yang dilaksanakan oleh osis untuk mengasah kemampuan dan juga kerohanian.</p>
</div>
<div class="container"> 
    <div class="row "style="margin-top: 30px;">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="assets/img/porsza.jpeg" class="card-img-top" alt="poto">
                <div class="card-body">
                    <h5 class="card-title">PORSZA</h5>
                    <p  class="card-text">Porak Seni dan  Bazar di SMKN 1 Cisarua adalah acara penuh semangat di mana siswa menampilkan bakat seni mereka seperti tari, musik, dan drama. Acara ini juga dimeriahkan dengan bazar yang menjual berbagai produk hasil karya siswa, menjadi ajang unjuk kreativitas sekaligus mempererat kebersamaan warga sekolah.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="assets/img/17ags.jpeg" class="card-img-top" alt="poto">
                <div class="card-body">
                    <h5 class="card-title">MEMPERINGATI HARI KEMERDEKAAN</h5>
                    <p class="card-text">Program kerja ini diadakan untuk memperingati Hari Kemerdekaan Republik Indonesia dengan menggelar berbagai lomba antar kelas. Kegiatan ini bertujuan menumbuhkan semangat kebersamaan, sportivitas, dan cinta tanah air, serta mempererat persaudaraan antar siswa melalui kompetisi yang sehat.</p>
                </div>
            </div> 
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="assets/img/kerohanian2.jpeg" class="card-img-top" alt="poto">
                <div class="card-body">
                    <h5 class="card-title">KEROHANIAN</h5>
                    <p class="card-text">Acara Maulid Nabi biasanya dimeriahkan dengan berbagai lomba, seperti lomba pidato, nasyid, dan khataman Al-Qur'an. Kegiatan ini bertujuan untuk memperdalam pengetahuan agama dan menumbuhkan semangat komunitas dalam merayakan kelahiran Nabi Muhammad SAW.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 class="text-black">Belajar dan bekerja bersama dalam tim untuk menyukseskan program kerja</h2>
            <p>Dalam OSIS kita belajar dan bekerja bersama dalam setiap program kerja yang telah direncanakan.</p>
        </div>
        <div class="col-md-6">
            <div class="card card-custom shadow">
                <img src="assets/img/poto6.jpg" class="card-img img-fluid animate_animated animate_zoomIn" alt="OSIS Activity">
            </div>
        </div>
    </div>
</div>
<!-- Google Maps -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6655535351724!2d107.56538517325572!3d-6.8104735931870835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e3d3f4f7be0f%3A0x92af10dbbdf42097!2sSMK%20Negeri%201%20Cisarua%20%7C%20Kab.%20Bandung%20Barat!5e0!3m2!1sid!2sid!4v1726019457642!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
</body>
<?php include 'layout/footer.php'; ?>
