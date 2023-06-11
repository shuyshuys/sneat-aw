<?php
// menghubungkan file auth.php untuk memproses login

$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "aw_warehouse";

// Create connection
$koneksi = mysqli_connect($servername, $user, $pass, $dbname);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
