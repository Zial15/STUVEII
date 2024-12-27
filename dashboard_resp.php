<?php
session_start();
if ($_SESSION['role'] != 'responden') {
    header("Location: index.html"); // Ganti dengan halaman login Anda
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Responden</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?> (Responden)</h1>
    <a href="logout.php">Logout</a>
    <!-- Konten khusus untuk responden -->
</body>
</html>