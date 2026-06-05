<?php
session_start();

// Cek apakah sudah login
if (!isset($_SESSION['sudah_login']) || $_SESSION['sudah_login'] !== true) {
    header("Location: login.php");
    exit;
}

// Ambil data dari halaman login
$nama = $_SESSION['username']; // Tetap: MUHAMAD FARHAN
$saldo = $_SESSION['saldo_dana']; // Tetap: 900 TRILIUN

// Fungsi format uang
function formatUang($angka) {
    return number_format($angka, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Skills | WIN REWARDS | DANA Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Animasi Tambahan */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Gaya Tambahan untuk Kartu Info Akun */
        .kartu-info {
            background: linear-gradient(135deg, #008DE8 0%, #0066b3 100%);
            color: white;
            border-radius: 15px;
            padding: 20px;
            margin: 20px auto;
            max-width: 7xl;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- ==============================================
        BAGIAN TAMBAHAN: INFORMASI AKUN & SALDO BOS
    ============================================== -->
    <div class="kartu-info fade-in max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-4 items-center">
            <div>
                <h2 class="text-xl font-bold">Selamat Datang, <?= $nama ?> 👋</h2>
                <p class="text-blue-100">Akun Premium Terverifikasi</p>
            </div>
            <div class="text-right">
                <p class="text-sm text-blue-100">Saldo Utama</p>
                <p class="text-3xl font-bold">Rp <?= formatUang($saldo) ?></p>
            </div>
        </div>
    </div>

    <!-- HALAMAN UTAMA: AGENT SKILLS -->
    <div id="halamanDepan" class="fade-in">
        <!-- Navigation -->
        <nav class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 py-4 flex flex-wrap justify-between items-center gap-2">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Agent Skills</h1>
                    <p class="text-gray-600 text-sm mt-1">AI Development Framework</p>
                </div>
                <div class="flex gap-2 flex-wrap">
                    <!-- TOMBOL MASUK KE GAME -->
                    <button onclick="bukaGame()" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold px-4 py-2 rounded-lg hover:shadow-lg transition transform hover:scale-105 text-sm">
                        🎮 WIN REWARDS
                    </button>
                    <!-- TOMBOL BARU: MASUK KE DANA DASHBOARD -->
                    <button onclick="bukaDana()" class="bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold px-4 py-2 rounded-lg hover:shadow-lg transition transform hover:scale-105 text-sm">
                        💳 DANA Dashboard
                    </button>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h2 class="text-4xl font-bold mb-4">Build Intelligent Applications</h2>
                <p class="text-xl text-blue-100 mb-8">A comprehensive framework for developing AI-powered agents and automation tools</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="https://github.com/agentskills/agentskills" class="inline-block bg-white text-blue-600 font-semibold px-8 py-3 rounded-lg hover:bg-blue-50 transition">
                        View on GitHub
                    </a>
                    <!-- TOMBOL MASUK KE GAME DI TENGAH -->
                    <button onclick="bukaGame()" class="inline-block bg-yellow-400 text-gray-900 font-bold px-8 py-3 rounded-lg hover:bg-yellow-300 transition transform hover:scale-105 shadow-lg">
                        🚀 MULAI BERMAIN - WIN REWARDS
                    </button>
                    <!-- TOMBOL BARU: MASUK KE DANA DI TENGAH -->
                    <button onclick="bukaDana()" class="inline-block bg-blue-500 text-white font-bold px-8 py-3 rounded-lg hover:bg-blue-600 transition transform hover:scale-105 shadow-lg">
                        💳 BUKA DANA DASHBOARD
                    </button>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="max-w-7xl mx-auto px-4 py-16">
            <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Features</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h4 class="text-xl font-semibold mb-3 text-gray-900">Modular Architecture</h4>
                    <p class="text-gray-600">Build flexible and scalable AI applications with reusable components</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h4 class="text-xl font-semibold mb-3 text-gray-900">Easy Integration</h4>
                    <p class="text-gray-600">Seamlessly integrate with popular AI models and services</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h4 class="text-xl font-semibold mb-3 text-gray-900">Production Ready</h4>
                    <p class="text-gray-600">Battle-tested framework suitable for enterprise applications</p>
                </div>
            </div>
        </section>

        <!-- License Section -->
        <section class="bg-gray-100 py-12">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Open Source</h3>
                <p class="text-gray-600 mb-4">Licensed under Apache License 2.0</p>
                <a href="./LICENSE" class="text-blue-600 hover:underline font-semibold">View License</a>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-8">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <div class="flex flex-wrap justify-center gap-4 mb-6">
                    <!-- TOMBOL MASUK KE GAME DI BAWAH -->
                    <button onclick="bukaGame()" class="bg-gradient-to-r from-yellow-400 to-yellow-600 text-gray-900 font-bold py-3 px-8 rounded-full shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                        🎮 MASUK KE AREA PERMAINAN
                    </button>
                    <!-- TOMBOL BARU: MASUK KE DANA DI BAWAH -->
                    <button onclick="bukaDana()" class="bg-gradient-to-r from-blue-500 to-blue-700 text-white font-bold py-3 px-8 rounded-full shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                        💳 BUKA DANA DASHBOARD
                    </button>
                </div>
                <p>&copy; 2025 Agent Skills. All rights reserved.</p>
                <p class="text-gray-400 text-sm mt-2">
                    <a href="https://github.com/agentskills/agentskills" class="hover:text-white">GitHub</a> | 
                    <a href="./LICENSE" class="hover:text-white">License</a>
                </p>
            </div>
        </footer>
    </div>

    <!-- HALAMAN KEDUA: WIN REWARDS -->
    <div id="kontainerGame" class="fixed top-0 left-0 w-full h-full bg-white z-50 hidden fade-in">
        <div class="bg-gray-900 p-2 flex items-center">
            <button onclick="kembaliKeAwal()" class="text-white bg-blue-600 px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                ⬅ Kembali ke Beranda
            </button>
            <h2 class="text-white text-center flex-1 font-bold text-lg">WIN REWARDS - SISTEM PENGIRIMAN ASLI</h2>
        </div>
        <iframe 
            id="isiGame"
            src="https://winrewards.v9r2yhjg.com/4692458173/index.html?click_clickid=iRhE&utm_source=tiktok&utm_id=1863281494198482&utm_campaign=MC-YM-TT-PWA-01+%E7%9A%84%E5%89%AF%E6%9C%AC+1+%E7%9A%84%E5%89%AF%E6%9C%AC+1&utm_medium=paid&lpt=1&show_landingpage=1&ttclid=E.C.P.Cs0BVZJK9L1rOZS6CSbNumwsyLhOaEUW_fzZQ7TYFIhYk4f1uHbnF0cX_2uj7-NCZPizntGl5xXNmTnebhyUOHIOMuintNvVKtJmBupAFSXf_WQw27U4yTj2v194Ne0vnNEee5htwApH9Y4Jl5puhQi4C4YTREyT7gPEuJl25m7YvIgiv1ucTQtT61kxan93uTiDK5Lp8K5NX5OTs6Illcdcsauf1uBvCFFXJlMTnE47CXUSX_2tUjKK7Ix4d9cMA2DLwoZW9QyBM_UJpn5WRxIEdjIuMBogDhthP2kzy-po-Aq3g4F7LK-VB-NlcjHaJZG24hKZ8oM&orientation=portrait&height=744&width=360&aspect_ratio=100.0&is_pre_render=1&uuid=U260424WGRQlbTSqhWhWQ3mmhQGvs&link_id=L260425GjzY7N2nJQIPPlUDrhgoP1&rb_clear_source_flag=1&rb_tid=0&rb_intent=chrome&is_open_chrome=1&rb_to=__roibest_scan#/game?gameId=2024-000024&gameCode=PGS_135&thirdId=1&platform=h5&screenType=1" 
            class="w-full h-full border-none"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>

    <!-- HALAMAN BARU: DANA DASHBOARD -->
    <div id="kontainerDana" class="fixed top-0 left-0 w-full h-full bg-white z-50 hidden fade-in">
        <div class="bg-blue-600 p-2 flex items-center">
            <button onclick="kembaliKeAwalDana()" class="text-white bg-gray-800 px-4 py-2 rounded-lg hover:bg-gray-900 transition">
                ⬅ Kembali ke Beranda
            </button>
            <h2 class="text-white text-center flex-1 font-bold text-lg">DANA Dashboard</h2>
        </div>
        <iframe 
            id="isiDana"
            src="https://dashboard.dana.id/app/home" 
            class="w-full h-full border-none"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>

    <script>
        // Fungsi untuk membuka halaman Game
        function bukaGame() {
            document.getElementById('halamanDepan').classList.add('hidden');
            document.getElementById('kontainerGame').classList.remove('hidden');
            window.scrollTo(0, 0);
        }

        // Fungsi untuk kembali dari Game
        function kembaliKeAwal() {
            document.getElementById('kontainerGame').classList.add('hidden');
            document.getElementById('halamanDepan').classList.remove('hidden');
        }

        // Fungsi BARU: membuka halaman DANA
        function bukaDana() {
            document.getElementById('halamanDepan').classList.add('hidden');
            document.getElementById('kontainerDana').classList.remove('hidden');
            window.scrollTo(0, 0);
        }

        // Fungsi BARU: kembali dari DANA
        function kembaliKeAwalDana() {
            document.getElementById('kontainerDana').classList.add('hidden');
            document.getElementById('halamanDepan').classList.remove('hidden');
        }
    </script>

</body>
</html>
