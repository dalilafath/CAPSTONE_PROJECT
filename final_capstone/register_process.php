<?php
// register_process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password

    // Koneksi ke database (ganti dengan informasi database Anda)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "emergencycall";

    $conn = new mysqli($servername, $username, $password, $database);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk menyimpan data pengguna
    $sql = "INSERT INTO tabel_user (email, fullName, password) VALUES ('$email', '$fullName', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect ke halaman login setelah berhasil registrasi
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
