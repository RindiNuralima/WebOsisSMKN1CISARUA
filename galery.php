<?php
session_start();
include 'layout\header.php'; 
// Membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
        alert('Login dulu');
        document.location.href = 'login.php';
        </script>";
    exit;
}
 ?>
<div class="container-fluid text-center mt-0 my-4 py-3" style="background-color: #add8e6; height: auto;">
    <div class="row">
        <div class="col-12">
            <h2 class="display-4">GALERY</h2>
            <p class="lead">Dokumentasi Kegiatan OSIS SMK NEGERI 1 CISARUA</p>
        </div>
    </div>
</div>
<div class="container mt-5 my-4"> 
    <h5>GALERY --------------------</h5>
    <h2>KEGIATAN OSIS</h2>
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
<div class="container">
    <div class="row "style="margin-top: 30px;">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="assets/img/batik.jpeg" class="card-img-top" alt="poto">
                <div class="card-body">
                    <h5 class="card-title">HARI BATIK</h5>
                    <p class="card-text">Hari Batik di SMKN 1 Cisarua merayakan keindahan batik melalui fashion show, lomba desain batik, dan lomba digital terkait batik. Acara ini juga dimeriahkan dengan berbagai kegiatan yang mempererat kebersamaan dan kreativitas warga sekolah.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="assets/img/perpisahan.jpeg" class="card-img-top" alt="poto">
                <div class="card-body">
                    <h5 class="card-title">PERPISAHAN </h5>
                    <p class="card-text">OSIS biasanya terlibat dalam perencanaan, pembukaan acara, menjadi MC, menyiapkan penampilan seni, menyerahkan kenang-kenangan, membuat video atau slide show, berkoordinasi dengan guru, menggalang dana, mendekorasi tempat, dan mendokumentasikan perpisahan kakak kelas.</p>
                </div>
            </div>
        </div> 
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="assets/img/event.jpeg" class="card-img-top" alt="poto">
                <div class="card-body">
                    <h5 class="card-title">EVENT SPONSOR</h5>
                    <p class="card-text">Event bersama Enstronsop dan Mie Sedap menampilkan demo produk Enstronsop dan berbagai hidangan mie lezat dari Mie Sedap. Acara ini bertujuan menghibur, mempererat hubungan antar peserta, dan memperkenalkan produk inovatif kepada masyarakat.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  include 'layout\footer.php'; ?>