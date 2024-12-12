<?php
$servername = "localhost";  // Sesuaikan dengan server database
$username   = "root";       // Sesuaikan dengan username database
$password   = "";           // Sesuaikan dengan password database
$dbname     = "db_osis"; // Ganti dengan nama database kamu

$db = mysqli_connect('localhost', 'root', '', 'db_osis');
if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>