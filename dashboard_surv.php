<?php
session_start();
if ($_SESSION['role'] != 'surveiyor') {
    header("Location: index.html"); // Ganti dengan halaman login Anda
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Surveiyor</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?> (Surveiyor)</h1>
    <a href="logout.php">Logout</a>
    <!-- Konten khusus untuk surveiyor -->
</body>
</html>