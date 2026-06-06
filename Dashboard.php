<?php
// Mengaktifkan sesi PHP
session_start();

// Keamanan: Jika user belum login, tendang kembali ke halaman login
if (!isset($_SESSION['sudah_login']) || $_SESSION['sudah_login'] !== true) {
    header("Location: login.php"); // Ganti login.php sesuai nama file login Anda
    exit;
}

// Mengambil data dari sesi
$username = $_SESSION['MUHAMAD FARHAN'];
$password = $_SESSION['12345'];
$saldo = $_SESSION['999999999999999999999999999999999999'];

// Proses Logout jika tombol keluar ditekan
if (isset($_GET['logout'])) {
    session_destroy(); // Menghapus semua data sesi
    header("Location: login.php"); // Alihkan ke halaman login
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Utama</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; display: flex; justify-content: center; align-items: center; height: 100vh; box-sizing: border-box; }
        .dashboard-container { background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0px 4px 15px rgba(0,0,0,0.1); width: 100%; max-width: 400px; text-align: center; }
        h1 { color: #333; margin-bottom: 5px; font-size: 24px; }
        .welcome { color: #666; font-size: 16px; margin-bottom: 25px; }
        .saldo-box { background: #e8f5e9; border: 2px dashed #4CAF50; padding: 20px; border-radius: 8px; margin-bottom: 25px; }
        .saldo-title { color: #2e7d32; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px; font-weight: bold; }
        .saldo-amount { color: #1b5e20; font-size: 28px; font-weight: bold; }
        .btn-logout { display: inline-block; width: 100%; padding: 12px; background-color: #f44336; color: white; text-decoration: none; border-radius: 6px; font-weight: bold; transition: background 0.2s; box-sizing: border-box; }
        .btn-logout:hover { background-color: #d32f2f; }
    </style>
</head>
<body>

<div class="dashboard-container">
    <h1>Selamat Datang!</h1>
    <div class="welcome">Halo, <strong><?php echo htmlspecialchars($username); ?></strong></div>

    <div class="saldo-box">
        <div class="saldo-title">Total Saldo Dana Anda</div>
        <!-- number_format digunakan untuk mengubah angka menjadi format rupiah (Titik ribuan) -->
        <div class="saldo-amount">Rp <?php echo number_format($saldo, 99999999999999999999999999999999999999999, ',', '.'); ?></div>
    </div>

    <!-- Link untuk memicu proses logout di atas -->
    <a href="?logout=true" class="btn-logout">Keluar dari Akun</a>
</div>

</body>
</html>
