<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style/regist-style.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="assets/logo.png" alt="Logo">
        </div>
        <div class="form-container">
            <h1>Daftar</h1>
            <form action="register_process.php" method="POST">
                <label for="fullName">Nama Lengkap:</label>
                <input type="text" id="fullName" name="fullName" placeholder="Masukan Nama Lengkap Anda" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukan Email Anda" required>

                <label for="password">Kata Sandi:</label>
                <input type="password" id="password" name="password" placeholder="Masukan Password Anda" required>

                <label for="confirmPassword">Konfirmasi Kata Sandi:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Masukan Ulang Password Anda" required>

                <div class="buttons">
                    <button type="submit" class="button register-button">Daftar</button>
                    <a href="login.html" class="button login-button">Masuk</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
