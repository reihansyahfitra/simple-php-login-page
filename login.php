<?php
    // Start the session
    session_start();

    // Include connection
    include 'koneksi.php';

    // Get username and password from form
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // Query the database for the username and password
    $query = mysqli_query($connect, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

    // Check if the query returned any results
    $cek = mysqli_num_rows($query);
    if ($cek > 0) {
        echo "Login berhasil";
        echo "<br>";
        echo "<a href='#'>Kembali ke halaman utama</a>";
    } else {
        echo "Login gagal";
        echo "<br>";
        echo "<a href='index.html'>Kembali ke halaman login</a>";
    }
?>