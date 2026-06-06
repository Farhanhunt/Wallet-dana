<?php
// Mengaktifkan sesi PHP untuk menyimpan status login
session_start();

// USERNAME & PASSWORD (Menghapus spasi yang tidak sengaja di ujung teks)
$username_benar = "MUHAMAD FARHAN";
$password_benar = "12345";

// SALDO 900 TRILIUN
$saldo = 900000000000000;

$pesan_error = "";

// Memproses data ketika tombol login ditekan (Metode POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Trim digunakan untuk menghapus spasi tidak sengaja di awal/akhir input user
    $username_input = trim($_POST['username']);
    $password_input = $_POST['password'];

    // Validasi kecocokan nama pengguna dan kata sandi
    if ($username_input === $username_benar && $password_input === $password_benar) {
        // Jika benar, simpan status ke sesi dan alihkan ke halaman utama
        $_SESSION['sudah_login'] = true;
        $_SESSION['username'] = $username_input;
        $_SESSION['saldo_dana'] = $saldo;
        
        header("Location: dashboard.php");
        exit;
    } else {
        // Jika salah, tampilkan pesan kesalahan
        $pesan_error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="https://dm.dana.id,">
<head>
    <meta charset="UTF-8">
    <title>Halaman Login</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-container { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); width: 300px; }
        .error { color: red; margin-bottom: 15px; font-size: 14px; }
        input[type="text"], input[type="password"] { width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; background-color: #4CAF50; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #45a049; }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Formulir Login</h2>
    
    <!-- Menampilkan pesan error jika login gagal -->
    <?php if (!empty($pesan_error)): ?>
        <div class="error"><?php echo $pesan_error; ?></div>
    <?php endif; ?>

    <!-- Form input dikirimkan kembali ke file ini sendiri -->
    <form action="" method="POST">
        <label for="username">Nama Pengguna</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Kata Sandi</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Masuk</button>
    </form>
</div>

</body>
</html>
