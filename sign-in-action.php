<?php
include 'db_connection.php'; // File koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Validasi password
    if ($password !== $confirmPassword) {
        echo "<script>alert('Password tidak cocok!'); window.history.back();</script>";
        exit();
    }

    // Cek jika username sudah ada
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Username sudah terdaftar!'); window.history.back();</script>";
        exit();
    }

    // Masukkan data ke database
    $query = "INSERT INTO users (fullname, username, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $fullname, $username, $password);

    if ($stmt->execute()) {
        echo "<script>alert('Akun berhasil dibuat!'); window.location.href='login.html';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan!'); window.history.back();</script>";
    }
}
?>
