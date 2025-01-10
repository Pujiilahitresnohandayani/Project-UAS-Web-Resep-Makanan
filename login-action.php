<?php
session_start();
include 'db_connection.php'; // File koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa kredensial
    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Login berhasil, set session dan redirect ke home
        $_SESSION['username'] = $username; // Set session untuk user
        header("Location: index.php"); // Redirect ke index.php
        exit();
    } else {
        // Login gagal, kembali ke halaman login
        echo "<script>alert('Username atau password salah!'); window.history.back();</script>";
    }
}
?>
