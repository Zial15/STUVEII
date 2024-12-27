<?php
session_start();
session_destroy();
header("Location: index.html"); // Ganti dengan halaman login Anda
exit();
?>