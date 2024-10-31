<?php
// Konfigurasi database
$server = "localhost"; // Ganti dengan host jika diperlukan
$user = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "blog"; // Nama database

$conn = new mysqli($server, $user, $password, $database);

// Memeriksa db
if ($conn->connect_error) {
    die("koneksi gagal: " . $conn->connect_error);
}

?>
