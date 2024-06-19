<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/login-style.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="assets/logo.png" alt="Logo">
        </div>
        <div class="form-container">
            <h1>Masuk</h1>
            <form action="login_process.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukan Email Anda" required>

                <label for="password">Kata Sandi:</label>
                <input type="password" id="password" name="password" placeholder="Masukan Password Anda" required>

                <div class="buttons">
                    <button type="submit" class="button login-button">Masuk</button>
                </div>
            </form>
            <a href="register.php" class="forgot-password">Belum Punya Akun?</a>
        </div>
    </div>
</body>
</html>
