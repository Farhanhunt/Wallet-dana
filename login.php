<?php
session_start();

// Jika sudah login, redirect ke dashboard
if(isset($_SESSION['user_login'])) {
    header("Location: dashboard.php");
    exit();
}

$error_message = "";

// Proses login
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Validasi username & password hardcoded
    if($username === 'Farhan' && $password === '123456') {
        $_SESSION['user_login'] = true;
        $_SESSION['username'] = 'Farhan';
        $_SESSION['nama_lengkap'] = 'MUHAMAD FARHAN';
        $_SESSION['nomor_dana'] = '0858-1111-5697';
        $_SESSION['login_time'] = date('Y-m-d H:i:s');
        
        // Redirect ke dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        $error_message = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login DANA - Dompet Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
        
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        .bg-gradient-login {
            background: linear-gradient(135deg, #008DE8 0%, #0066b3 100%);
        }
        
        .login-container {
            animation: slideUp 0.5s ease-out;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .input-focus {
            transition: all 0.3s ease;
        }
        
        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(0, 141, 232, 0.1);
            border-color: #008DE8;
        }
        
        .btn-login {
            transition: all 0.3s ease;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 141, 232, 0.3);
        }
        
        .btn-login:active {
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-gradient-login min-h-screen flex items-center justify-center p-4">
    
    <div class="login-container w-full max-w-md">
        <!-- Logo & Header -->
        <div class="text-center mb-8">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/Logo_DANA.svg/320px-Logo_DANA.svg.png" alt="DANA" class="h-12 mx-auto mb-4">
            <h1 class="text-3xl font-bold text-white mb-2">DANA Wallet</h1>
            <p class="text-blue-100">Masuk ke akun Anda</p>
        </div>

        <!-- Card Login -->
        <div class="bg-white rounded-3xl shadow-2xl p-8 mb-6">
            
            <!-- Error Message -->
            <?php if($error_message): ?>
            <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded">
                <div class="flex items-center">
                    <i class="fa fa-exclamation-circle text-red-500 mr-3"></i>
                    <p class="text-red-700 font-medium"><?= htmlspecialchars($error_message) ?></p>
                </div>
            </div>
            <?php endif; ?>

            <!-- Form Login -->
            <form method="POST" action="">
                <!-- Username -->
                <div class="mb-5">
                    <label for="username" class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fa fa-user mr-2 text-blue-500"></i>Username
                    </label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        class="input-focus w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none"
                        placeholder="Masukkan username"
                        required
                    >
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fa fa-lock mr-2 text-blue-500"></i>Password
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="input-focus w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none"
                        placeholder="Masukkan password"
                        required
                    >
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-6">
                    <input type="checkbox" id="remember" class="w-4 h-4 rounded">
                    <label for="remember" class="ml-2 text-sm text-gray-600">Ingat saya di perangkat ini</label>
                </div>

                <!-- Button Login -->
                <button 
                    type="submit" 
                    class="btn-login w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-bold py-3 rounded-lg hover:shadow-lg transition mb-4"
                >
                    <i class="fa fa-sign-in mr-2"></i>Masuk
                </button>
            </form>

            <!-- Demo Info -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mt-6">
                <p class="text-sm text-gray-700 font-medium mb-2">
                    <i class="fa fa-info-circle text-blue-500 mr-2"></i>Demo Login
                </p>
                <p class="text-xs text-gray-600">
                    <strong>Username:</strong> Farhan<br>
                    <strong>Password:</strong> 123456
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center text-blue-100 text-sm">
            <p>© 2026 DANA Wallet. All rights reserved.</p>
        </div>
    </div>

</body>
</html>
