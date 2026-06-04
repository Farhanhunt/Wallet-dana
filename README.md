<?php
// PENGATURAN UTAMA
$namaPengguna = "MUHAMAD FARHAN";
$nomorDana = "0858-1111-5697";
$saldoUtama = 900000000000000; // 900 TRILIUN RUPIAH
$poinDana = 999999;
$limitBulanan = 2000000000000000; // 2 Kuadriliun
$terpakai = 0;

// FORMAT ANGKA AGAR RAPI
function formatUang($angka) {
    return number_format($angka, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANA - Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    warnaDana: '#008DE8',
                    warnaEmas: '#FFD700',
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .bayangan-dana {
                box-shadow: 0 10px 30px rgba(0, 141, 232, 0.35);
            }
            .bayangan-emas {
                box-shadow: 0 10px 30px rgba(255, 215, 0, 0.35);
            }
            .kaca {
                background: rgba(255, 255, 255, 0.15);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.2);
            }
            .teks-berkilau {
                text-shadow: 0 0 15px rgba(255, 255, 255, 0.6);
            }
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- ==========================================
        BAGIAN ATAS - HEADER & PROFIL
        AKSES LANGSUNG TANPA KUNCI 🔓
    =========================================== -->
    <div class="bg-warnaDana px-4 pt-10 pb-20 rounded-b-[2.5rem] bayangan-dana relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-20 -mt-20"></div>
        <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/10 rounded-full -ml-10 -mb-10"></div>

        <div class="container mx-auto relative z-10">
            <!-- Baris Atas -->
            <div class="flex justify-between items-center mb-6">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/Logo_DANA.svg/320px-Logo_DANA.svg.png" alt="DANA" class="h-9">
                <div class="flex items-center gap-4">
                    <div class="relative">
                        <i class="fa fa-bell-o text-white text-2xl"></i>
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center font-bold">99+</span>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-white/30 kaca flex items-center justify-center text-white font-bold text-lg">
                        <?= substr($namaPengguna, 0, 2) ?>
                    </div>
                </div>
            </div>

            <!-- Kartu Identitas Pengguna -->
            <div class="flex items-center gap-3 mb-4">
                <div>
                    <h2 class="text-white font-bold text-xl"><?= $namaPengguna ?></h2>
                    <p class="text-white/80 text-sm"><?= $nomorDana ?></p>
                </div>
                <span class="ml-auto bg-green-500 text-white text-xs px-3 py-1 rounded-full font-bold flex items-center gap-1">
                    <i class="fa fa-check-circle"></i> PREMIUM
                </span>
            </div>

            <!-- KARTU SALDO UTAMA 🔥 -->
            <div class="bg-white rounded-3xl p-6 bayangan-dana relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 bg-warnaDana/5 rounded-full -mr-10 -mt-10"></div>
                
                <p class="text-gray-500 font-semibold text-lg">Total Saldo</p>
                <h1 class="text-[clamp(2.5rem,8vw,4rem)] font-bold text-gray-900 my-2 teks-berkilau">
                    Rp <?= formatUang($saldoUtama) ?>
                </h1>

                <div class="grid grid-cols-3 gap-3 mt-5 text-center">
                    <div class="bg-warnaDana/5 p-3 rounded-xl">
                        <p class="text-gray-500 text-xs">DANA Poin</p>
                        <p class="font-bold text-warnaDana text-lg"><?= formatUang($poinDana) ?></p>
                    </div>
                    <div class="bg-green-500/5 p-3 rounded-xl">
                        <p class="text-gray-500 text-xs">Uang Kembali</p>
                        <p class="font-bold text-green-600 text-lg">Rp 250.000</p>
                    </div>
                    <div class="bg-yellow-500/5 p-3 rounded-xl">
                        <p class="text-gray-500 text-xs">Voucher</p>
                        <p class="font-bold text-yellow-600 text-lg">12 Aktif</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
        MENU FITUR UTAMA
    =========================================== -->
    <div class="container mx-auto px-4 -mt-12 mb-8">
        <div class="bg-white rounded-3xl p-6 bayangan-dana">
            <div class="grid grid-cols-4 gap-6 text-center">
                <!-- FITUR 1 -->
                <div class="flex flex-col items-center gap-2 cursor-pointer hover:scale-105 transition-transform">
                    <div class="w-14 h-14 rounded-full bg-warnaDana/10 text-warnaDana flex items-center justify-center text-2xl">
                        <i class="fa fa-plus"></i>
                    </div>
                    <span class="font-semibold text-gray-700">Isi Saldo</span>
                </div>
                <!-- FITUR 2 -->
                <div class="flex flex-col items-center gap-2 cursor-pointer hover:scale-105 transition-transform">
                    <div class="w-14 h-14 rounded-full bg-warnaDana/10 text-warnaDana flex items-center justify-center text-2xl">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                    <span class="font-semibold text-gray-700">Kirim Uang</span>
                </div>
                <!-- FITUR 3 -->
                <div class="flex flex-col items-center gap-2 cursor-pointer hover:scale-105 transition-transform">
                    <div class="w-14 h-14 rounded-full bg-warnaDana/10 text-warnaDana flex items-center justify-center text-2xl">
                        <i class="fa fa-arrow-down"></i>
                    </div>
                    <span class="font-semibold text-gray-700">Minta Uang</span>
                </div>
                <!-- FITUR 4 -->
                <div class="flex flex-col items-center gap-2 cursor-pointer hover:scale-105 transition-transform">
                    <div class="w-14 h-14 rounded-full bg-warnaDana/10 text-warnaDana flex items-center justify-center text-2xl">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <span class="font-semibold text-gray-700">Kartu DANA</span>
                </div>
                <!-- FITUR 5 -->
                <div class="flex flex-col items-center gap-2 cursor-pointer hover:scale-105 transition-transform">
                    <div class="w-14 h-14 rounded-full bg-warnaDana/10 text-warnaDana flex items-center justify-center text-2xl">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <span class="font-semibold text-gray-700">Belanja</span>
                </div>
                <!-- FITUR 6 -->
                <div class="flex flex-col items-center gap-2 cursor-pointer hover:scale-105 transition-transform">
                    <div class="w-14 h-14 rounded-full bg-warnaDana/10 text-warnaDana flex items-center justify-center text-2xl">
                        <i class="fa fa-bolt"></i>
                    </div>
                    <span class="font-semibold text-gray-700">Beli Token</span>
                </div>
                <!-- FITUR 7 -->
                <div class="flex flex-col items-center gap-2 cursor-pointer hover:scale-105 transition-transform">
                    <div class="w-14 h-14 rounded-full bg-warnaDana/10 text-warnaDana flex items-center justify-center text-2xl">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <span class="font-semibold text-gray-700">Bayar Tagihan</span>
                </div>
                <!-- FITUR 8 -->
                <div class="flex flex-col items-center gap-2 cursor-pointer hover:scale-105 transition-transform">
                    <div class="w-14 h-14 rounded-full bg-warnaDana/10 text-warnaDana flex items-center justify-center text-2xl">
                        <i class="fa fa-ellipsis-h"></i>
                    </div>
                    <span class="font-semibold text-gray-700">Lainnya</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
        STATUS LIMIT & KEUANGAN
    =========================================== -->
    <div class="container mx-auto px-4 mb-8">
        <div class="bg-gradient-to-r from-warnaDana to-blue-700 rounded-3xl p-6 text-white bayangan-dana">
            <h3 class="font-bold text-xl mb-3 flex items-center gap-2">
                <i class="fa fa-shield"></i> Batas Transaksi Bulanan
            </h3>
            <div class="flex justify-between items-center mb-2">
                <span class="text-white/80">Terpakai:</span>
                <span class="font-bold">Rp <?= formatUang($terpakai) ?></span>
            </div>
            <div class="w-full bg-white/20 h-3 rounded-full mb-3">
                <?php $persen = ($terpakai / $limitBulanan) * 100; ?>
                <div class="bg-white h-3 rounded-full" style="width: <?= $persen ?>%"></div>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-white/80 text-sm">Sisa Limit:</span>
                <span class="font-bold text-lg">Rp <?= formatUang($limitBulanan - $terpakai) ?></span>
            </div>
        </div>
    </div>

    <!-- ==========================================
        FITUR PREMIUM & LAINNYA
    =========================================== -->
    <div class="container mx-auto px-4 mb-8 space-y-5">
        <!-- Kartu DANA Emas -->
        <div class="bg-gradient-to-r from-yellow-400 to-warnaEmas rounded-3xl p-6 bayangan-emas flex items-center justify-between">
            <div>
                <h3 class="font-bold text-gray-900 text-xl mb-1">DANA Emas</h3>
                <p class="text-gray-800 text-sm">Investasi Emas Mulai 10 Ribu</p>
            </div>
            <div class="bg-white p-3 rounded-full">
                <i class="fa fa-star text-warnaEmas text-2xl"></i>
            </div>
        </div>

        <!-- DANA Keuangan Lain -->
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-white rounded-2xl p-5 shadow-md hover:shadow-lg transition-shadow">
                <i class="fa fa-piggy-bank text-warnaDana text-3xl mb-3"></i>
                <h4 class="font-bold text-gray-800">DANA Simpanan</h4>
                <p class="text-xs text-gray-500">Bunga Hingga 4% p.a</p>
            </div>
            <div class="bg-white rounded-2xl p-5 shadow-md hover:shadow-lg transition-shadow">
                <i class="fa fa-money text-green-500 text-3xl mb-3"></i>
                <h4 class="font-bold text-gray-800">Pinjaman</h4>
                <p class="text-xs text-gray-500">Cair Hingga 50 Juta</p>
            </div>
        </div>
    </div>

    <!-- ==========================================
        DAFTAR RIWAYAT TRANSAKSI
    =========================================== -->
    <div class="container mx-auto px-4 mb-20">
        <h3 class="font-bold text-gray-800 text-xl mb-4">Riwayat Transaksi Terakhir</h3>
        <div class="bg-white rounded-3xl shadow-md divide-y divide-gray-100">
            
            <!-- Item Transaksi 1 -->
            <div class="p-5 flex items-center justify-between hover:bg-gray-50 transition">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
                        <i class="fa fa-download"></i>
                    </div>
                    <div>
                        <p class="font-bold text-gray-800">Terima dari BCA</p>
                        <p class="text-xs text-gray-500">Hari ini, 10:30</p>
                    </div>
                </div>
                <span class="font-bold text-green-600">+ Rp 1.500.000</span>
            </div>

            <!-- Item Transaksi 2 -->
            <div class="p-5 flex items-center justify-between hover:bg-gray-50 transition">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-red-100 text-red-600 flex items-center justify-center">
                        <i class="fa fa-upload"></i>
                    </div>
                    <div>
                        <p class="font-bold text-gray-800">Pembayaran Tokopedia</p>
                        <p class="text-xs text-gray-500">Kemarin, 14:20</p>
                    </div>
                </div>
                <span class="font-bold text-red-600">- Rp 450.000</span>
            </div>

            <!-- Item Transaksi 3 -->
            <div class="p-5 flex items-center justify-between hover:bg-gray-50 transition">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center">
                        <i class="fa fa-gift"></i>
                    </div>
                    <div>
                        <p class="font-bold text-gray-800">Cashback Belanja</p>
                        <p class="text-xs text-gray-500">03 Jun 2026</p>
                    </div>
                </div>
                <span class="font-bold text-green-600">+ Rp 125.500</span>
            </div>

        </div>
    </div>

    <!-- ==========================================
        NAVIGASI BAWAH
    =========================================== -->
    <div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 py-3 px-6 flex justify-between items-center">
        <div class="flex flex-col items-center text-warnaDana">
            <i class="fa fa-home text-2xl"></i>
            <span class="text-xs font-bold">Beranda</span>
        </div>
        <div class="flex flex-col items-center text-gray-400">
            <i class="fa fa-bar-chart text-2xl"></i>
            <span class="text-xs">Riwayat</span>
        </div>
        <div class="flex flex-col items-center text-gray-400">
            <i class="fa fa-qrcode text-2xl"></i>
            <span class="text-xs">Scan</span>
        </div>
        <div class="flex flex-col items-center text-gray-400">
            <i class="fa fa-tag text-2xl"></i>
            <span class="text-xs">Promo</span>
        </div>
        <div class="flex flex-col items-center text-gray-400">
            <i class="fa fa-user text-2xl"></i>
            <span class="text-xs">Saya</span>
        </div>
    </div>

</body>
</html>
