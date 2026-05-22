<?php
session_start();
include '../config/koneksi.php';

if (isset($_SESSION['username'])) {
    header("Location: ../dashboard.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ShareGoods</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">

    <style>
        .form-control {
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 12px 15px;
            background: #f8f9fa;
            color: var(--text-dark);
            font-size: 0.95rem;
        }

        .form-control::placeholder {
            color: #adb5bd;
        }

        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(1, 61, 68, 0.1);
            border-color: var(--primary-green);
            background: #ffffff;
        }

        @media (max-width: 768px) {
            .login-box {
                flex-direction: column;
            }

            .login-image {
                display: none;
            }

            .login-form-container {
                padding: 40px 30px;
            }

            .navbar-floating {
                width: 90%;
                padding: 10px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="login-wrapper">
        <div class="login-box">

            <div class="login-image"></div>

            <div class="login-form-container">

                <h3 class="login-title">Login</h3>
                <p class="login-subtitle">Silakan masuk ke akun ShareGoods kamu</p>

                <?php if (isset($_GET['error'])): ?>
                    <div class="alert alert-danger text-center p-2 mb-4" style="font-size: 0.9rem; border-radius: 8px;">
                        <?php echo htmlspecialchars($_GET['error']); ?>
                    </div>
                <?php endif; ?>

                <form action="proses_login.php" method="POST">

                    <div class="mb-3">
                        <input type="text" name="username"
                            value="<?php echo isset($_COOKIE['username']) ? htmlspecialchars($_COOKIE['username']) : ''; ?>"
                            class="form-control"
                            placeholder="Username" required>
                    </div>

                    <div class="mb-4">
                        <input type="password" name="password"
                            class="form-control"
                            placeholder="Minimal 8 Karakter" required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                <?php if (isset($_COOKIE['username'])) echo 'checked'; ?>>
                            <label class="form-check-label" for="remember">
                                Ingat saya
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-login w-100">Login</button>
                    <p class="text-center mb-0" style="font-size: 0.9rem; color: #6c757d; margin-top: 1.5rem;">
                        Belum punya akun?
                        <a href="register.php" class="text-link" style="text-decoration: underline;">Daftar</a>
                    </p>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>