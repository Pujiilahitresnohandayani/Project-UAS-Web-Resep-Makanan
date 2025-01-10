<?php
if (isset($_SESSION['username'])) {
    // Jika user sudah login
    echo '<span>Welcome, ' . $_SESSION['username'] . '</span>';
    echo '<a href="logout.php" class="logout">Logout</a>';
} else {
    // Jika user belum login
    echo '<a href="html/sign_in.html" class="sci">Sign In</a>';
    echo '<a href="html/login.html" class="login">Login</a>';
}
?>