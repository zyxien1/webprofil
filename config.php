<?php
$servername = "localhost";
$username = "root";
$password = "alan";
$dbname = "webprofil";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}