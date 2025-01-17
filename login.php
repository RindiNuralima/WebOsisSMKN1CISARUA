<?php
session_start();
include 'config/app.php';

// Cek koneksi database
if (!$db) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// cek apakah tombol login sudah ditekan
if (isset($_POST['login'])) {
    // ambil input username dan password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // menggunakan prepared statements untuk mencegah SQL Injection
    $stmt = mysqli_prepare($db, "SELECT * FROM akun WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // jika ada usernya
    if (mysqli_num_rows($result) == 1) {
        $hasil = mysqli_fetch_assoc($result);

        // cek passwordnya
        if (password_verify($password, $hasil['password'])) {
            // set session
            $_SESSION['login'] = true;
            $_SESSION['id_akun'] = $hasil['id_akun'];
            $_SESSION['nama'] = $hasil['nama'];
            $_SESSION['username'] = $hasil['username'];
            $_SESSION['email'] = $hasil['email'];
            $_SESSION['level'] = $hasil['level'];

            // jika login benar arahkan ke file index.php
            header("Location: index.php");
            exit;
        } else {
            $error = "Username atau Password salah";
        }
    } else {
        $error = "Username atau Password salah";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login · OSIS SMKN 1 Cisarua</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .login-page {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #4F75FF;
      }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo text-center">
        <img class="mb-4" src="assets/img/Logo.png" alt="" width="100" height="100">
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Selamat datang, Silahkan login</p>

            <!-- Tampilkan pesan error jika login gagal -->
            <?php if (isset($error)) : ?>
                <div class="alert alert-danger text-center">
                    <b><?php echo $error; ?></b>
                </div>
            <?php endif; ?>

            <form action="" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username" required>
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
