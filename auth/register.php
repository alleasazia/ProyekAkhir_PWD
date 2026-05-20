<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - ShareGoods</title>

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

        /* sama kek di logic tapi bde di edit */
        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(1, 61, 68, 0.1);
            border-color: var(--primary-green);
            background: #ffffff;
        }

        @media (max-width: 768px) {
            .auth-box {
                flex-direction: column;
            }

            .auth-image {
                display: none;
            }

            .auth-form-container {
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
    <div class="auth-wrapper">
        <div class="auth-box">

            <div class="auth-form-container">

                <h3 class="auth-title">Buat Akun</h3>
                <p class="auth-subtitle">Silakan daftar untuk bergabung dengan ShareGoods</p>

                <?php if (isset($_GET['error'])): ?>
                    <div class="alert alert-danger text-center p-2 mb-4" style="font-size: 0.9rem; border-radius: 8px;">
                        <?php echo htmlspecialchars($_GET['error']); ?>
                    </div>
                <?php endif; ?>

                <form action="proses_register.php" method="POST">

                    <div class="mb-3">
                        <input type="text" name="username"
                            class="form-control"
                            placeholder="Username" required>
                    </div>

                    <div class="mb-4">
                        <input type="password" name="password"
                            class="form-control"
                            placeholder="Password" required minlength="8">
                    </div>

                    <button type="submit" class="btn btn-auth w-100 mb-3">Daftar</button>

                    <p class="text-center mb-0" style="font-size: 0.9rem; color: #6c757d;">
                        Sudah punya akun?
                        <a href="login.php" class="text-link">Login</a>
                    </p>

                </form>

            </div>

            <div class="auth-image"></div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>