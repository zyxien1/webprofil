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

$Username = $_POST['username'];
$Password = $_POST['password'];
$Email = $_POST['email'];
$Namalengkap = $_POST['namalengkap'];

$sql = "INSERT INTO kontak (nama, email, massage) VALUES ('$nama', '$email', '$massage')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
