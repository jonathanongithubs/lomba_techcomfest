<?php
require("config.php");

session_start(); // Mulai sesi

$name = $_POST['name'];
$email = $_POST['email']; // Menggunakan 'email' dari form
$password = $_POST['password']; // Menggunakan 'password' dari form

$insert = mysqli_query($conn, "INSERT INTO user (name, email, password,role) VALUES ('$name', '$email', '$password','user')");

if ($insert) {
    $_SESSION['email'] = $email; // Simpan email ke dalam sesi

    header("location:projek/jelajah.php"); // Redirect ke halaman beranda.php
} else {
    echo "gagal";
}
?>
