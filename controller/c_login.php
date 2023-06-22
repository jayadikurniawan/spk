<?php
require_once "../model/m_login.php";
session_start();
$login = new Login();

// Proses login
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Mendapatkan data yang dikirimkan dari form
    $userType = $_POST["userType"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validasi dan autentikasi pengguna menggunakan class Login
    if ($login->checkLogin($userType, $username, $password)) {
        // Login berhasil
        if ($userType === "admin") {
            $_SESSION['user'] = $username;
            header("Location: ../page_admin/dashboard.php");
            exit;
        } elseif ($userType === "pencarikerja") {
            $_SESSION['user'] = $username;
            header("Location: ../page_pencarikerja/dashboard.php");
            exit;
        } elseif ($userType === "pemberikerja") {
            $_SESSION['user'] = $username;
            header("Location: ../page_pemberikerja/dashboard.php");
            exit;
        }
    } else {
        // Login gagal
        header("Location: ../index.php");
        $errorMessage = "Username atau password salah.";
    }
}
?>