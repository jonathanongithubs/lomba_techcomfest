<?php
session_start();
require("config.php");

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = mysqli_prepare($conn, "SELECT * FROM user WHERE email = ?");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    
    if ($user['password'] == $password) {
        $_SESSION['email'] = $user['email'];
        
        // Sesuaikan ini dengan kolom peran (role) di tabel pengguna Anda
        $role = $user['role']; // Misalnya, kolom peran disebut 'role'

        // Redirect berdasarkan peran (role) pengguna
        if ($role == 'user') {
            header("location: projek/jelajah.php");
        } elseif ($role == 'admin') {
            header("location: projek/halaman_admin.php");
        } else {
            // Peran lainnya (jika ada)
            // header("location: halaman_default.php");
        }
        exit(); 
    } else {
        echo "Password salah";
    }
} else {
    echo "Email tidak ditemukan";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
