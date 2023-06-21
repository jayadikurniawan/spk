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
            header("Location: ../view/v_admin.php");
            exit;
        } elseif ($userType === "pencarikerja") {
            header("Location: ../view/v_pencariKerja.php");
            exit;
        } elseif ($userType === "pemberikerja") {
            $_SESSION['user'] = $username;
            header("Location: ../view/v_pemberiKerja.php");
            exit;
        }
    } else {
        // Login gagal
        header("Location: ../index.php");
        $errorMessage = "Username atau password salah.";
    }
}
?>