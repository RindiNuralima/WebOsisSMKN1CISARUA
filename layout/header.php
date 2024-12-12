<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Memulai sesi hanya jika belum dimulai
}
include 'config/app.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSIS SMKN 1 CISARUA</title>
    <link rel="icon" href="assets/img/Logo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    


    <style>
        /* CSS untuk mengatur ukuran gambar pada carousel */
        .carousel-item img {
            height: 500px; /* Sesuaikan tinggi yang Anda inginkan */
            object-fit: cover; /* Memastikan gambar tetap proporsional */
        }

        /* CSS untuk menambah tinggi minimum navbar */
        .navbar {
            min-height: 100px; /* Sesuaikan tinggi navbar */
            background-color: #1A4870;
        }

        /* CSS untuk menata logo dan teks */
        .navbar-brand img {
            height: 65px; /* Sesuaikan tinggi logo */
            margin-right: 5px; /* Jarak antara logo dan teks */
        }

        .card {
            margin: 0 auto; /* Center the card horizontally */
        }

        .card-img-top {
            height: 250px; /* Set a fixed height for the image */
            object-fit: cover; /* Ensure image covers the area without distortion */
        }

        .card-custom {
            border: none; /* Menghapus border kartu */
            overflow: hidden; /* Memastikan gambar tidak meluber dari kartu */
        }

        .card-img {
            width: 100%; /* Memastikan gambar memenuhi lebar kolom */
            height: auto; /* Menjaga proporsi gambar */
        }
        /* Responsivitas untuk teks dan gambar profil */
.container-fluid h2, .container h2, .container h5, .container p {
    font-size: 1rem; /* Mengurangi ukuran teks untuk tampilan yang lebih kecil */
}

@media (max-width: 768px) {
    .container-fluid h2, .container h2 {
        font-size: 1.25rem; /* Mengurangi ukuran teks di layar kecil */
    }
    
    .container h5 {
        font-size: 1rem; /* Menyusutkan ukuran subtitle di perangkat kecil */
    }
    
    /* Untuk kolom pada misi dan visi */
    .col-md-6 {
        margin-bottom: 20px;
    }
}

/* Responsif untuk elemen peta */
@media (max-width: 768px) {
    iframe {
        height: 300px; /* Mengurangi tinggi iframe pada layar kecil */
    }
}

/* Responsif untuk misi dan visi card */
.card {
    margin: 10px 0;
}

/* Tambahan gaya teks di dalam card */
.card-title {
    font-size: 1.5rem;
}

.card-body p, .card-body ul li {
    font-size: 1rem; /* Ukuran font default */
}

@media (max-width: 768px) {
    .card-title {
        font-size: 1.25rem; /* Kurangi ukuran judul card di perangkat kecil */
    }
    
    .card-body p, .card-body ul li {
        font-size: 0.9rem; /* Ukuran font lebih kecil di perangkat mobile */
    }
}

/* Gaya Google Maps responsif */
iframe {
    width: 100%;
    height: 450px;
}

@media (max-width: 576px) {
    iframe {
        height: 300px; /* Menyusutkan tinggi iframe di layar lebih kecil */
    }
}

/* Lokasi teks responsif */
.card-body p {
    text-align: center;
    font-size: 1rem; /* Pastikan teks tetap mudah dibaca */
}

@media (max-width: 768px) {
    .card-body p {
        font-size: 0.9rem; /* Sesuaikan ukuran font di perangkat kecil */
    }
}
/* Responsif untuk container dan grid */
.container {
    width: 100%;
    padding: 0 15px;
}

/* Membuat gambar responsif */
.card-img-top {
    width: 100%;
    height: 200px; /* Membatasi tinggi gambar agar seragam */
    object-fit: cover; /* Menghindari distorsi gambar */
}

/* Responsive text adjustment */
.card-title {
    font-size: 1.5rem;
}

.card-text {
    font-size: 1rem;
}

/* Mengatur margin bottom pada card */
.card {
    margin-bottom: 20px;
}

/* Atur ulang grid untuk perangkat kecil */
@media (max-width: 768px) {
    .col-md-4 {
        margin-bottom: 20px;
    }

    /* Mengatur tinggi gambar pada perangkat mobile */
    .card-img-top {
        height: 180px;
    }

    .card-title {
        font-size: 1.25rem; /* Sesuaikan ukuran judul di layar kecil */
    }

    .card-text {
        font-size: 0.9rem; /* Sesuaikan ukuran teks di layar kecil */
    }
}

        /* Responsive styling */
        @media (max-width: 768px) {
            .footer-custom {
                text-align: center;
            }
        }
        
        /* Gaya Footer */
.footer-custom {
    background-color: #1A4870; /* Warna latar belakang terang */
    color: #ffff; /* Warna teks */
    padding-top: 20px; /* Ubah dari 50px menjadi 20px */
    padding-bottom: 20px; /* Ubah dari 50px menjadi 20px */
    text-align: center; /* Memusatkan konten secara keseluruhan */
    position: relative;
}

.footer-logo {
    width: 60px;
    margin-right: 10px;
}

.footer-custom h3 {
    font-weight: bold;
    margin-bottom: 10px;
}

.footer-custom a {
    color: #ffff; /* Warna tautan */
    text-decoration: none;
}

.footer-custom a:hover {
    text-decoration: underline;
}

/* Ikon Media Sosial */
.social-icons {
    display: flex;
    gap: 15px;
}

.social-icon {
    font-size: 18px;
    color: #ffff; /* Warna ikon */
    transition: color 0.3s;
}

.social-icon:hover {
    color: #ffff; /* Warna ikon saat di-hover */
}

/* Bagian Bawah Footer */
.footer-bottom {
    border-top: 1px solid #e9ecef;
    padding-top: 20px;
    margin-top: 20px;
}

.footer-bottom a {
    color: #ffff; /* Warna tautan di bawah footer */
}

.footer-bottom a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .form {
        margin-bottom: 100px; /* Tambahkan jarak yang lebih besar pada perangkat kecil */
    }
}

.clearfix::after {
    content: "";
    display: table;
    clear: both;
}

    </style>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/Logo.png" alt="Logo" height="65">
                OSIS SMK CISARUA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-database"></i> Data
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <!-- Hanya admin (level 1) yang bisa akses Data Anggota -->
                            <?php if($_SESSION['level'] == 1 || $_SESSION['level'] == 2): ?>
                                <li><a class="dropdown-item" href="data-anggota.php"><i class="fas fa-users"></i> Data Anggota</a></li>
                                <li><a class="dropdown-item" href="data-kepengurusan.php"><i class="fas fa-user-tie"></i> Data Kepengurusan</a></li>
                                <li><a class="dropdown-item" href="data-event.php"><i class="fas fa-calendar-alt"></i> Data Kegiatan Event Sekolah</a></li>
                                <li><a class="dropdown-item" href="data-pelantikan.php"><i class="fas fa-graduation-cap"></i> Data Pelantikan</a></li>
                                <li><a class="dropdown-item" href="data-organisasi.php"><i class="fas fa-sitemap"></i> Data Organisasi Luar</a></li>
                                <li><a class="dropdown-item" href="data-grafik.php"><i class="fas fa-chart-bar"></i> Data Grafik</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galery.php"><i class="fas fa-images"></i> Galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.php"><i class="fas fa-user"></i> Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="akun.php"><i class="fas fa-user-cog"></i> Akun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </head>