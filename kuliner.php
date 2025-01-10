<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html"); // Redirect ke login jika belum login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner</title>
</head>
<body>
    <header>
        <h1>Halaman Kuliner</h1>
        <p>Selamat datang di halaman kuliner, <?php echo $_SESSION['username']; ?>!</p>
    </header>
    <main>
        <p>Eksplorasi berbagai tempat makan terbaik di sini.</p>
    </main>
    <footer>
        <a href="logout.php">Logout</a>
    </footer>
</body>
</html>
