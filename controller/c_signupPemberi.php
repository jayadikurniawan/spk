<!-- signup_process.php -->
<?php
require_once '../model/m_konek.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    
    // Insert data into database
    $query = "INSERT INTO `pemberikerja`(`username`, `password`, `email`, `telepon`, `nama`, `alamat`) VALUES ('$username', '$password', '$email', '$telepon', '$nama', '$alamat')";
    $result = $mysqli->query($query);
    
    if ($result) {
        header("Location: ../index.php");
        echo "Signup successful!";
    } else {
        echo "Error: " . $mysqli->error;
    }
}
?>
