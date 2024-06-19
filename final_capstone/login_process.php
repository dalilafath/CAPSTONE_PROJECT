<?php
// login_process.php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Koneksi ke database (ganti dengan informasi database Anda)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "emergencycall";

    // Buat koneksi
    $conn = new mysqli($servername, $username, $password, $database);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk mencari pengguna dengan email yang cocok
    $sql = "SELECT * FROM tabel_user WHERE email='$email'";
    $result = $conn->query($sql);

    // Periksa apakah query dieksekusi dengan benar
    if ($result === false) {
        echo "Error: " . $conn->error;
    } else {
        // Periksa apakah ada hasil yang ditemukan
        if ($result->num_rows == 1) {
            // Pengguna ditemukan, periksa password
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                // Password cocok, login berhasil
                $_SESSION['email'] = $email;
                header("Location: beranda.html");
                exit();
            } else {
                // Password tidak cocok
                header("Location: beranda.html");
            }
        } else {
            // Email tidak ditemukan
            header("Location: beranda.html");
        }
    }

    // Tutup koneksi
    $conn->close();
}
?>