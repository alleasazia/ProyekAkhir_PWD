<?php session_start(); ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Login - ShareGoods</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        /* Margin manual dihapus, biarkan Flexbox yang bekerja */
        .card-login {
            border-radius: 20px;
        }
    </style>
</head>

<body>

<div class="main-wrapper d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid nav-container">
            <a class="logo text-decoration-none" href="../index.php">ShareGoods</a>

            <div class="collapse navbar-collapse justify-content-center">
                <div class="menu">
                    <a href="../index.php">Home</a>
                    <a href="../AboutMe.php">Tentang</a>
                    <a href="../kontak.php">Kontak</a>
                </div>
            </div>

            <div class="nav-right">
                <a href="#" class="btn-custom">Masuk</a>
            </div>
        </div>
    </nav>

    <div class="container login-section flex-grow-1 d-flex align-items-center justify-content-center p-3">
        <div class="row w-100 justify-content-center">
            <div class="col-12 col-md-8 col-lg-5">

                <div class="card shadow border-0 p-4 p-md-5 card-login w-100">

                    <form action="proses_login.php" method="POST">
                        <h2 class="text-center fw-bold mb-4">Login</h2>

                        <input type="text" name="username" 
                        value="<?php echo isset($_COOKIE['username']) ? htmlspecialchars($_COOKIE['username']) : ''; ?>" 
                        class="form-control mb-3"
                        placeholder="Username" required>

                        <input type="password" name="password" 
                        class="form-control mb-3"
                        placeholder="Password" required>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">
                                Ingat saya
                            </label>
                        </div>

                        <button type="submit" class="btn-custom w-100 py-2">
                            Login
                        </button>
                    </form>

                    <p class="text-center mt-4 mb-0">
                        Belum punya akun? 
                        <a href="register.php" class="text-success fw-semibold text-decoration-none">
                            Daftar
                        </a>
                    </p>

                </div>

            </div>
        </div>
    </div>

</div>

</body>
</html>