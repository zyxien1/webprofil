<?php
session_start();
include '../config.php';

if (!isset($_SESSION['admin'])) {
    header('Location: ../login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $email = $_POST['email'];
    $nama_lengkap = $_POST['nama_lengkap'];



    $query = "INSERT INTO admin (username, password, email, nama_lengkap) VALUES ('$username', '$password', '$email', '$nama_lengkap')";
    mysqli_query($conn, $query);

    header('Location: list_admin.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Admin</title>
</head>
<body>
    <h2>Tambah Admin</h2>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>
