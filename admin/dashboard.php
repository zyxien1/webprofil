<?php
session_start();
include '../config.php';

if (!isset($_SESSION['admin'])) {
    header('Location: ../login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="..//style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <!-- section 1: Navigation Menu-->
     <nav>
        <div class="container">
            <ul class="nav-links">
               <li>
                <a href="list_admin.php">Daftar Admin</a><br>
              </li>
              <li>
                <a href="add_admin.php">Tambah Admin</a><br>
             </li>
             <li>
                <a href="list_blog.php">Daftar blog</a><br>
              </li>
              <li>
                <a href="add_blog.php">Tambah blog</a><br>
             </li>
             <li>
                <a href="../logout.php"></a>
             </li>
            </ul>
          </div>
         </nav>
         
         <section id="Profil">
        <div class="container">
            <img src="../rawr.jpg" alt="Profil Photo" class="profile-photo">
        </div>
     </section>


       
    <footer>
        <p>Created with love Magang Soraya 2024</p>
    </footer>

</body>
</html>

    
