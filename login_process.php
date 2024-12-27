<?php
session_start();
var_dump($_POST);
exit();
// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// Contoh validasi pengguna (ganti dengan logika database Anda)
$valid_users = [
    'surveiyor' => ['username' => 'surveiyor_user', 'password' => 'surveiyor_pass'],
    'responden' => ['username' => 'responden_user', 'password' => 'responden_pass']
];

// Cek apakah role valid
if (array_key_exists($role, $valid_users)) {
    // Cek username dan password
    if ($username === $valid_users[$role]['username'] && $password === $valid_users[$role]['password']) {
        // Set session
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;

        // Redirect ke dashboard sesuai role
        if ($role == 'surveiyor') {
            header("Location: dashboard_surv.php");
        } else {
            header("Location: dashboard_resp.php");
        }
        exit();
    } else {
        echo "Username atau password salah.";
    }
} else {
    echo "Role tidak valid.";
}

?>